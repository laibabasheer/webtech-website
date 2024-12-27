@extends('layouts.app')

@section('content')
<!-- Search Bar -->
<div class="my-4 text-center">
    <input type="text" id="search" class="form-control w-50 mx-auto" placeholder="Search for services..." autocomplete="off">
</div>

<!-- Search Results -->
<div id="search-results" class="mt-3"></div>

<script>
    document.getElementById('search').addEventListener('input', function () {
        let query = this.value;

        // Send an AJAX request to the search route
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
    <div class="container">
        <h1>Services</h1>
        <a href="{{ route('services.create') }}" class="btn btn-primary mb-3">Create New Service</a>
        
        <ul class="list-group">
            @foreach ($services as $service)
                <li class="list-group-item">
                    <h5>{{ $service->name }}</h5>
                    <p>{{ $service->description }}</p>
                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('services.destroy', $service->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>


@endsection
