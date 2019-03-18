<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Category;

class TestController extends Controller
{
    public function test(Request $request)
    {
        // $categories = collect(config('category'))
        //     ->map(function ($category) {
        //         return [
        //             'parent_id' => 4,
        //             'name' => $category,
        //             'created_at' => Carbon::now(),
        //             'updated_at' => Carbon::now(),
        //         ];
        //     })
        //     ->toArray();

        // $insert = Category::insert($categories);

        // return response(['status' => $insert], 200);
    }
}
