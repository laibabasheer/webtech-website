@extends('layouts.app')

@section('content')
    <!-- About Us Section -->
    <div class="text-center mb-4">
        <h1>About Us</h1>
        <p>WebTech offers premium tech services tailored to your needs.</p>
    </div>

    <!-- Mission and Vision Section -->
    <div class="row my-5">
        <div class="col-md-6">
            <h2>Our Mission</h2>
            <p>
                At WebTech, our mission is to empower businesses with cutting-edge technology solutions that drive success and innovation.
                We strive to deliver top-notch services that meet and exceed our clients' expectations.
            </p>
        </div>
        <div class="col-md-6">
            <h2>Our Vision</h2>
            <p>
                Our vision is to become a global leader in the tech services industry by consistently innovating and delivering exceptional 
                value to our clients. We aim to create a future where technology bridges gaps and transforms industries.
            </p>
        </div>
    </div>

    <!-- Team Section -->
    <div class="my-5">
        <h2 class="text-center">Meet Our Team</h2>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="{{ asset('/images/ceo.jpg') }}" alt="Team Member 1" class="rounded-circle my-3" 
                style="width: 150px; height: 150px; object-fit: cover;">
                <h5>John Doe</h5>
                <p>CEO & Founder</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/cto.avif') }}" alt="Team Member 2" class="rounded-circle my-3" 
                style="width: 150px; height: 150px; object-fit: cover;">
                <h5>Jane Smith</h5>
                <p>CTO</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/lead.avif') }}" alt="Team Member 3" class="rounded-circle my-3" 
                style="width: 150px; height: 150px; object-fit: cover;">
                <h5>Michael Brown</h5>
                <p>Lead Developer</p>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="my-5 bg-light p-4 rounded ">
        <h2 class="text-center">Why Choose Us?</h2>
        <div class="row">
            <div class="col-md-4 text-center">
                <h4>Innovative Solutions</h4>
                <p>We stay ahead of industry trends to deliver the most innovative and effective tech solutions.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Client-Centric Approach</h4>
                <p>Our clients' success is our top priority. We work closely with you to achieve your goals.</p>
            </div>
            <div class="col-md-4 text-center">
                <h4>Experienced Team</h4>
                <p>Our team comprises seasoned professionals with extensive expertise in the tech industry.</p>
            </div>
        </div>
    </div>
@endsection

