@extends('layout')

@section('content')
    <h1>Projects</h1>
    <a href="{{ route('projects.create') }}">Create New Project</a>
    <ul>
        @foreach ($projects as $project)
            <li>
                {{ $project->name }} - {{ $project->department->name }}
                <a href="{{ route('projects.edit', $project) }}">Edit</a>
                <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>

    
    <input type="text" id="search" class="form-control w-50 mx-auto" placeholder="Search for services..." autocomplete="off">
<div id="search-results" class="mt-3"></div>
<script>
    document.getElementById('search').addEventListener('input', function () {
        let query = this.value;

        fetch(`/search-services?query=${query}`)
            .then(response => response.json())
            .then(data => {
                let results = document.getElementById('search-results');
                results.innerHTML = ''; // Clear previous results

                if (data.length > 0) {
                    data.forEach(service => {
                        results.innerHTML += `<div class="card my-2">
                            <div class="card-body">
                                <h5 class="card-title">${service.name}</h5>
                                <p class="card-text">${service.description}</p>
                            </div>
                        </div>`;
                    });
                } else {
                    results.innerHTML = '<p class="text-center">No services found.</p>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    });
</script>

@endsection
