<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth'); // Ensure the user is authenticated
    }

    /**
     * Show the form for creating a new job.
     */
    public function create()
    {
        if (Auth::user()->role !== 'admin') {
            //abort(403, 'Unauthorizedd action.'); // Restrict access if not admin
        }

        return view('admin.jobs.create');
    }

    /**
     * Store a newly created job in storage.
     */
    public function store(Request $request)
    {
        if (Auth::user()->role !== 'admin') {
            //abort(403, 'Unauthorized action.'); // Restrict access if not admin
        }

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'location' => 'required|string|max:255',
        ]);

        Job::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
        ]);

        return redirect()->route('admin.jobs.index')->with('success', 'Job created successfully!');
    }
    public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'location' => 'required|string|max:255',
    ]);

    $job = Job::findOrFail($id); // Find the job by ID
    $job->update([
        'title' => $request->title,
        'description' => $request->description,
        'location' => $request->location,
    ]);

    return redirect()->route('Admin.jobs.index')->with('success', 'Job updated successfully!');
}
public function destroy($id)
{
    $job = Job::findOrFail($id); // Find the job by ID or throw a 404 error
    $job->delete(); // Delete the job

    return redirect()->route('Admin.jobs.index')->with('success', 'Job deleted successfully!');
}
public function index()
{
    $job = Job::all(); // Fetch all jobs from the database
    return view('admin.jobs.index', compact('job')); // Pass the jobs to the view
}

    public function edit($id)
    {
        // Fetch the resource by its ID
        $job = job::findOrFail($id); // Replace `Admin` with your model name
        
        // Return a view with the data
        return view('admin.jobs.edit', compact('job'));
    }
}


