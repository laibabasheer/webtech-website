@extends('layouts.app')

@section('content')

<!-- Services Section -->
<section id="services" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="section-title">Our Services</h2>
        <p class="section-description">We offer a variety of IT services, including web development, software solutions, and digital marketing, to help your business grow.</p>

        <!-- Search Bar -->
        <div class="mb-4">
            <input type="text" id="searchBar" class="form-control" placeholder="Search for services..." onkeyup="filterServices()" />
        </div>

        <!-- Services List -->
        <div class="row" id="services-list">
            @foreach ($services as $service)
                <div class="col-md-4 service-item">
                    <div class="service-box">
                        <img src="{{ asset('/images/' . $service->image) }}" alt="{{ $service->name }}" class="img-fluid rounded">
                        <h3>{{ $service->name }}</h3>
                        <p>{{ $service->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Admin: Add New Service -->
<section id="add-service" class="py-5">
    <div class="container">
        <h3 class="text-center mb-4">Add a New Service</h3>
        <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Service Name:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Service Image:</label>
                <input type="file" id="image" name="image" class="form-control" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Create Service</button>
            </div>
        </form>
    </div>
</section>

<!-- JavaScript for Service Filtering -->
<script>
    function filterServices() {
        let input = document.getElementById('searchBar').value.toLowerCase();
        let serviceItems = document.getElementsByClassName('service-item');

        Array.from(serviceItems).forEach(item => {
            let name = item.querySelector('h3').textContent.toLowerCase();
            if (name.includes(input)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }
</script>

@endsection
