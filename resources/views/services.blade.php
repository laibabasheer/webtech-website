@extends('layout')

@section('content')

<!-- Services Section -->
<section id="services" class="py-5 bg-light">
    <div class="container text-center">
        <h2 class="section-title">Our Services</h2>
        <p class="section-description">We offer a variety of IT services, including web development, software solutions, and digital marketing, to help your business grow.</p>

        <!-- Search Bar -->
        <div class="mb-4">
            <input type="text" id="searchBar" class="form-control" placeholder="Search for services..." />
        </div>

        <div class="row" id="services-list">
            <!-- Service 1 -->
            <div class="col-md-4 service-item">
                <div class="service-box">
                    <img src="{{ asset('/images/web.jpg') }}" alt="Web Development" class="img-fluid">
                    <h3>Web Development</h3>
                    <p>We create custom websites that help businesses grow. Our team uses the latest technologies to develop responsive and functional websites.</p>
                </div>
            </div>
            <!-- Service 2 -->
            <div class="col-md-4 service-item">
                <div class="service-box">
                    <img src="{{ asset('/images/app.jpg') }}" alt="Mobile App Development" class="img-fluid">
                    <h3>Mobile App Development</h3>
                    <p>We develop high-quality mobile applications for both iOS and Android platforms, focusing on usability and performance.</p>
                </div>
            </div>
            <!-- Service 3 -->
            <div class="col-md-4 service-item">
                <div class="service-box">
                    <img src="{{ asset('/images/SEO.jpg') }}" alt="SEO Services" class="img-fluid">
                    <h3>SEO Services</h3>
                    <p>We optimize websites to improve search engine rankings, drive traffic, and increase visibility for your business.</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
