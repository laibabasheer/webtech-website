<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebTech - IT Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Header (Navbar) -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/images/logo-removebg-preview.png">WebTech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('services') }}">Services</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container" style="margin-top: 80px;">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 WebTech. All rights reserved.</p>
        <!-- Scroll to Top Button -->
<button id="scrollTopBtn" class="btn btn-danger" style="display: none; position: fixed; bottom: 30px; right: 30px; border-radius: 50%; padding: 15px; font-size: 20px;">
    <i class="fa fa-arrow-up"></i>
</button>

    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
