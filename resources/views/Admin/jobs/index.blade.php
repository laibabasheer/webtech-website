@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Admin Dashboard - Jobs</h1>

        @if($jobs->count() > 0)
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Job Title</th>
                        <th>Location</th>
                        <th>Salary</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                        <tr>
                            <td>{{ $job->title }}</td>
                            <td>{{ $job->location }}</td>
                            <td>{{ $job->salary }}</td>
                            <td>
                                <!-- Example actions (view/edit/delete) -->
                                <a href="{{ route('Admin.jobs.edit', $job->id) }}" class="btn btn-primary">Edit</a> 
                                <form action="{{ route('jobs.destroy', $job->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No jobs found.</p>
        @endif
    </div>
@endsection
