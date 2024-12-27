<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobApplicationController extends Controller
{
   

    public function store(Request $request, $jobId)
    {
        $request->validate([
            'applicant_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'nullable|string|max:15',
            'cv' => 'required|mimes:pdf|max:2048',
        ]);

        $job = Job::findOrFail($jobId);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        JobApplication::create([
            'job_id' => $job->id,
            'applicant_name' => $request->applicant_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'cv_path' => $cvPath,
        ]);

        return back()->with('success', 'Your application has been submitted.');
    }
}

