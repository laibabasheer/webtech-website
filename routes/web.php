<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Home Route
Route::get('/', [PageController::class, 'home'])->name('home');

// About Route
Route::get('/about', [PageController::class, 'about'])->name('about');

// Services Route
Route::get('/services', [PageController::class, 'services'])->name('services');



