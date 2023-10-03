<?php

use App\Http\Controllers\MovieController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',  fn() => Inertia::render('Dashboard'))->name('dashboard');
    Route::get('/daisyui',  fn() => Inertia::render('DaisyUI'))->name('daisyui');

    Route::resource('/movies', MovieController::class)->names('movies');

    // Route::controller(RegisterController::class)->group(function () {
    //     Route::get('/', 'index')->name('index');
    //     Route::post('/register', 'store');
    // });
    // Route::get('/movie',  fn() => Inertia::render('Movie'))->name('movie');
});
