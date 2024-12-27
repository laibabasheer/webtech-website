<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class AuthenticatedSessionController extends Controller
{
    public function create()
{
    if (auth()->check()) {
        return redirect()->route('dashboard'); // Redirect authenticated users to dashboard
    }

    return view('auth.login'); // Show the login form to guests
}


    // Handle login
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            $request->session()->regenerate();
            return redirect()->route('dashboard'); // Redirect to the dashboard
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy(Request $request)
{
    Auth::guard('web')->logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return redirect('/');
}
    public function __construct()
{
    $this->middleware('guest')->except('destroy');
    $this->middleware(function ($request, $next) {
        if (auth()->check()) {
            return redirect('/dashboard');
        }
        return $next($request);
    });
}
}