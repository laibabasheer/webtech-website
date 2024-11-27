@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Welcome to WebTech</h1>
        <p>Your one-stop solution for tech services!</p>
    </div>

    <!-- Hero Section -->
    <div class="my-4 text-center">
        <img src="{{ asset('/images/Software-Houses-3.jpg') }}" alt="WebTech Solutions" class="img-fluid rounded" style="max-height: 400px;">
    </div>

    <!-- Services Section -->
    <div class="my-5">
        <h2 class="text-center">Our Services</h2>
        <p class="text-center">We offer a wide range of tech solutions tailored to your needs.</p>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="{{ asset('/images/webb.jpg') }}" alt="Service 1" class="img-fluid my-3" style="max-width: 150px;">
                <h4>Web Development</h4>
                <p>Build responsive and user-friendly websites with our expert team.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/app.jpg') }}" alt="Service 2" class="img-fluid my-3" style="max-width: 150px;">
                <h4>App Development</h4>
                <p>Customized mobile and desktop applications for your business.</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('/images/SEO.jpg') }}" alt="Service 3" class="img-fluid my-3" style="max-width: 150px;">
                <h4>SEO</h4>
                <p>Reliable and scalable cloud computing solutions.</p>
            </div>
        </div>
    </div>


    <!-- Partners Section -->
    <div class="my-5">
        <h2 class="text-center">Our Partners</h2>
        <p class="text-center">Proud to collaborate with leading tech companies.</p>
        <div class="d-flex justify-content-center flex-wrap">
            <img src="{{ asset('/images/OIP.jpg') }}" alt="Partner 1" class="img-fluid mx-3 my-2" style="max-height: 100px;">
            <img src="{{ asset('/images/c1.jpg') }}" alt="Partner 2" class="img-fluid mx-3 my-2" style="max-height: 100px;">
            <img src="{{ asset('/images/p1.jpg') }}" alt="Partner 3" class="img-fluid mx-3 my-2" style="max-height: 100px;">
            <img src="{{ asset('/images/p2.jpg') }}" alt="Partner 4" class="img-fluid mx-3 my-2" style="max-height: 100px;">
        </div>
    </div>
@endsection
