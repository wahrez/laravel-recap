<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $job = Job::with('employer')->latest()->paginate(3);
        return view('jobs.index', ['jobs' => $job]);
    }

    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    public function create()
    {
        return view('jobs/create');
    }

    public function store(Job $job)
    {
        Request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric'],
        ]);

        $job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 12
        ]);
        return redirect('/jobs');
    }

    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job)
    {
        Request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required', 'numeric'],
        ]);

        $job->update([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 12
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/jobs');
    }
}
