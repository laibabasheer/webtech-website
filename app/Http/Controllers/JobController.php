<?php
namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::all(); // Fetch all jobs
        return view('Admin.jobs.index', compact('jobs'));
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('Admin.jobs.show', compact('job'));
    }


    public function apply($id)
    {
        $job = Job::findOrFail($id);
        // Handle application logic here (e.g., storing the application)
        return redirect()->route('Admin.jobs.index')->with('success', 'Application submitted successfully!');
    }
}
