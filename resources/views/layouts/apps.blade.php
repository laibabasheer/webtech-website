<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Job Portal')</title>
</head>
<body>
    <header>
        <nav>
            <a href="{{ route('jobs.index') }}">Jobs</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
