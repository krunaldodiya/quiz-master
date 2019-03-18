<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Goutte\Client;

use App\Exam;
use App\Category;
use App\Question;
use Carbon\Carbon;

class ExamController extends Controller
{
    public function index(Request $request)
    {
        $exams = Exam::with('category.child')->orderBy('status', 'asc')->get();

        return view('exams.list', ['exams' => $exams]);
    }

    public function add(Request $request)
    {
        $categories = Category::with('child')->where('parent_id', 0)->get();

        return view('exams.add', ['categories' => $categories]);
    }

    public function store(Request $request)
    {
        $total_pages = $request->total_pages;
        $parsed = parse_url($request->url);
        $url = $parsed['scheme'] . "://" . $parsed['host'] . rtrim($parsed['path'], "/") . "/";

        $data = collect(range(1, $total_pages))
            ->map(function ($page) use ($request, $url) {
                return [
                    'category_id' => $request->category_id,
                    'url' => $url,
                    'section' => $request->section,
                    'total_pages' => $request->total_pages,
                    'page' => $page,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            })
            ->toArray();

        $exam = Exam::insert($data);

        return redirect()->back()->withInput()->with(['success' => 'Exam added']);
    }

    public function fetch(Request $request)
    {
        $id = $request->id;

        try {
            $exam = Exam::where(['id' => $id, 'status' => false])->first();

            $url = $exam->url;
            $section = $exam->section;
            $category_id = $exam->category_id;
            $page = $exam->page;

            $this->_scrap("${url}?section=${section}&page=${page}", $category_id);
            Exam::where('id', $id)->update(['status' => true]);

            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    private function _scrap($url, $category_id)
    {
        $client = new Client();

        $crawler = $client->request('GET', $url);

        $results = $crawler->filter('.grid_1200 .main-content .question')->each(function ($node, $i) use ($category_id) {
            $meta = [];

            if ($node->filter('h2 .question-main')->count()) {
                $value = $node->filter('.question-inner .question-options p.hidden input')->attr('value');

                $id = $node->filter('.question-inner .question-options p.hidden input')->attr('id');
                $question_id = explode("answer_", $id)[1];

                $option_1 = $node->filter(".question-inner .question-options p input#poll-${question_id}-1")->siblings()->last()->text();
                $option_2 = $node->filter(".question-inner .question-options p input#poll-${question_id}-2")->siblings()->last()->text();
                $option_3 = $node->filter(".question-inner .question-options p input#poll-${question_id}-3")->siblings()->last()->text();
                $option_4 = $node->filter(".question-inner .question-options p input#poll-${question_id}-4")->siblings()->last()->text();

                $meta['category_id'] = $category_id;
                $meta['question'] = $node->filter('h2 .question-main')->html();
                $meta['answer'] = "option_${value}";
                $meta['option_1'] = $option_1;
                $meta['option_2'] = $option_2;
                $meta['option_3'] = $option_3;
                $meta['option_4'] = $option_4;
                $meta['created_at'] = Carbon::now();
                $meta['updated_at'] = Carbon::now();
            }

            return $meta;
        });

        $data = collect($results)
            ->filter(function ($data) {
                return count($data);
            })
            ->toArray();

        Question::insert($data);
    }
}
