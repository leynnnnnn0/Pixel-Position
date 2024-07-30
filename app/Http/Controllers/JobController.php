<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::latest()->with('employer', 'tags')->get()->groupBy('featured');
        return view('job.index', [
            'featuredJobs' => $jobs[1],
            'jobs' => $jobs[0],
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the forms for creating a new resource.
     */
    public function create()
    {
        return view('job.create');
    }

    /**
     * Store a newly created resource in storage.
     */
//    StoreJobRequest $request
    public function store()
    {
        $attribute = request()->validate([
            'title' => ['required'],
            'salary' => ['required'],
            'location' => ['required'],
            'schedule' => ['required'], //Rule::in(['Part Time', 'Full Time'])]
            'url' => ['nullable'],
            'tags' => ['nullable'],
        ]);




        $attribute['featured'] = request()->has('featured');
        $job = Auth::user()->employer->jobs()->create(Arr::except($attribute, 'tags'));

        if ($attribute['tags'])
        {
            $tags = explode(',', $attribute['tags']);
            foreach ($tags as $tag)
            {
                 $job->tag(trim($tag));
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the forms for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
