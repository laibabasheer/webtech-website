@extends('layout')

@section('content')

<!-- Hero Section -->
<header class="hero text-center text-white" style="background-image: url('{{ asset('/img/web.png') }}');">
    <div class="container">
        <h1 class="display-4 hero-heading" style="color: black;">Welcome to WebTech</h1>
        <p class="lead hero-description" style="color: black;">Your One-Stop Solution for Web Development and IT Services</p>
        <a href="{{ route('services') }}" class="btn btn-light btn-lg hero-btn">Explore Our Services</a>
        <!-- About Us Section -->
<section id="about" class="py-5">
    <div class="container text-center">
    <h3 class="display-4 hero-heading" style="color: black;">We Provide</h3>
        <p class="section-description">We are a global IT services provider, specializing in custom software development, web solutions, and digital transformation.</p>
        <img src="{{ asset('/images/OIP.jpg') }}" alt="About Us" class="img-fluid">

    </div>
</section>

    </div>
</header>




@endsection
