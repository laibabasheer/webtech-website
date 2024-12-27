<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;


Route::prefix('admin')->group(function () {
    Route::get('/jobs', [AdminController::class, 'index'])->name('Admin.jobs.index');
    Route::get('/jobs/create', [AdminController::class, 'create'])->name('Admin.jobs.create');
    Route::post('/jobs', [AdminController::class, 'store'])->name('Admin.jobs.store');
    Route::get('/jobs/{id}/edit', [AdminController::class, 'edit'])->name('Admin.jobs.edit');
    Route::put('/jobs/{id}', [AdminController::class, 'update'])->name('Admin.jobs.update');
    Route::delete('/jobs/{id}', [AdminController::class, 'destroy'])->name('jobs.destroy'); // Added this
});



Route::get('/search', [SearchController::class, 'search'])->name('search');


Route::prefix('admin')->group(function () {
    Route::get('/jobs/create', [AdminController::class, 'create'])->name('admin.jobs.create');
    Route::post('/jobs', [AdminController::class, 'store'])->name('admin.jobs.store');
    Route::get('/jobs', [JobController::class, 'index'])->name('admin.jobs.index');
    Route::get('/jobs/{id}', [JobController::class, 'show'])->name('admin.jobs.show');
});


Route::get('/search-services', [ServicesController::class, 'search'])->name('services.search');



//Route::post('/register', [AuthController::class, 'register']);
//Route::post('/login', [AuthController::class, 'login']);
//Auth::routes();


// Authentication Routes
Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Password Reset Routes
Route::get('password/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('password/email', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [App\Http\Controllers\Auth\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('password/reset', [App\Http\Controllers\Auth\ResetPasswordController::class, 'reset'])->name('password.update');



// Default Redirect
Route::get('/', function () {
    return redirect()->route('dashboard');
});

// Home Page
Route::get('/home', function () {
    return view('home');
})->name('home');

// About Page
Route::get('/about', function () {
    return view('about');
})->name('about');


//Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('services/search', [ServiceController::class, 'search']);

// Define the services routes
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/create', [ServiceController::class, 'create'])->name('services.create');  // This route is for creating a service
Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');


// Search routes
Route::get('/services/search', [SearchController::class, 'index'])->name('services.search');  // This route will show the search page
Route::get('/search-services', [SearchController::class, 'searchServices'])->name('services.searchResults'); // This route will handle the search results


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



 Route::middleware('guest')->group(function () {
    // Login Route
      Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
     Route::post('/login', [AuthenticatedSessionController::class, 'store']);

    // Register Route
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    // Dashboard Route
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

Route::middleware('auth')->group(function () {
    // Logout Route
    Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


});


//Route::get('/fetch-data', [ApiRequestController::class, 'fetchData']);




