<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::paginate(20);

        return view('questions', ['questions' => $questions]);
    }
}
