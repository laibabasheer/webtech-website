@extends('layout')

@section('content')

<!-- About Us Section -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title">About WebTech</h2>
        <p class="section-description">WebTech is a trusted IT solutions company offering professional web and mobile 
            development services. Our team focuses on creating high-quality, scalable solutions for businesses of all
             sizes.</p>
             <img src="{{ asset('/images/image1.jpg') }}" alt="About Us" class="img-fluid">
        

        <div class="row mt-4">
            <div class="col-md-4">
                <h4>Our Journey</h4>
                <p>  we've expanded our expertise and become a trusted partner for web 
                     development, digital marketing, and IT consulting.</p>
            </div>
            <div class="col-md-4">
                <h4>Our Mission</h4>
                <p> We focus on creating tailored solutions that not only meet current needs but also anticipate future 
                    challenges, ensuring long-term success.</p>
            </div>
            <div class="col-md-4">
                <h4>Our Values</h4>
                <p>Integrity, innovation, and customer satisfaction are the core values that drive us. We believe in
                     fostering long-term relationships with
                      our clients.</p>
            </div>
        </div>
    

    </div>
</section>

@endsection
