<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(){
        $jobs = Job::with(['employer', 'tag'])->where('title', 'LIKE', '%'.request('q').'%')->get();

        return view('results', ['jobs' => $jobs]);
    }
}
