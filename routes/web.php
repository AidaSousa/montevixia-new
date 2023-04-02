<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/dash', function () {
    return view('user.index', ['user' => app()->make('App\Http\Controllers\UserController')->userIndex()]);
})->name('dash');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/associated', function () {
    return view('associated.index');
})->name('associated.index');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::get('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// Rutas de registro y verificación de correo electrónico
Route::get('/register', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [LoginController::class, 'register']);
// Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');
// Route::get('/email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
// Route::post('/email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

Route::view('/profile', "user.profile")->middleware('auth')->name('profile');
