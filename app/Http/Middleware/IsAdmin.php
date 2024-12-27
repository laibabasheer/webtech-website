<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     */
    public function create()
    {
        if (!Auth::check()) {
            dd('User not authenticated');
        }
    
        dd('User role: ' . Auth::user()->role);
    
        if (Auth::user()->role !== 'admin') {
            abort(403, 'Unauthorized action.');
        }
    
        return view('admin.jobs.create');
    }
    use Illuminate\Support\Facades\Auth;

public function destroy($id)
{
    if (Auth::user()->role !== 'admin') {
        abort(403, 'Unauthorized action.');
    }

    $job = Job::findOrFail($id);
    $job->delete();

    return redirect()->route('Admin.jobs.index')->with('success', 'Job deleted successfully!');
}

}
