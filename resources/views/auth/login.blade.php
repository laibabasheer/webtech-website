@extends('layouts.app') <!-- Extend your website's layout -->

@section('content')
<div class="container py-5">
    <h2 class="text-center">Login to Your Account</h2>
    <form method="POST" action="{{ route('login') }}" class="mx-auto mt-4" style="max-width: 400px;">
        @csrf

        <!-- Email Address -->
        <div class="mb-3">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </div>
    </form>

    <!-- Links -->
    <div class="mt-4 text-center">
        <a href="{{ route('password.request') }}">Forgot Password?</a> |
        <a href="{{ route('register') }}">Sign Up</a>
    </div>
</div>
@endsection
