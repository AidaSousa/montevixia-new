<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChildrenController;
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

//Children
Route::get('/children-index', [ChildrenController::class, 'indexChildren'])->name('children.index');
Route::get('/children-create', [ChildrenController::class, 'createChildren'])->name('children.create');
Route::post('/children-store', [ChildrenController::class, 'storeChildren'])->name('children.store');
Route::get('/children-edit/{id}', [ChildrenController::class, 'editChildren'])->name('children.edit');
Route::put('/children-update/{id}', [ChildrenController::class, 'updateChildren'])->name('children.update');
Route::get('/children-show', [ChildrenController::class, 'showChildren'])->name('children.show');
Route::get('/children-destroy/{id}', [ChildrenController::class, 'destroyChildren'])->name('children.destroy');

//Categories
Route::get('/category-index', [CategoryController::class, 'indexCategory'])->name('categories.index');
Route::get('/category-create', [CategoryController::class, 'createCategory'])->name('categories.create');
Route::post('/category-store', [CategoryController::class, 'storeCategory'])->name('categories.store');
Route::get('/category-edit/{id}', [CategoryController::class, 'editCategory'])->name('categories.edit');
Route::put('/category-update/{id}', [CategoryController::class, 'updateCategory'])->name('categories.update');
Route::get('/category-show', [CategoryController::class, 'showCategory'])->name('categories.show');
Route::get('/category-destroy/{id}', [CategoryController::class, 'destroyCategory'])->name('categories.destroy');

