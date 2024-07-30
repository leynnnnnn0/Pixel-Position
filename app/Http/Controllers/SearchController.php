<?php

namespace App\Http\Controllers;

use App\Models\Job;

class SearchController extends Controller
{
    // If a controller will only have one function

    public function __invoke()
    {
        $job = Job::where('title', 'LIKE', '%' . request('q') . '%')->get();
        return view('results', ['jobs' => $job]);
    }
}
