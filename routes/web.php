<?php

use App\Http\Controllers\AssociatedController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventUserController;
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
    return view('associated.show');
})->name('associated.show');

Route::get('/user', function () {
    return view('user.index');
})->name('user.index');

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

//Events
Route::get('/event-index', [EventController::class, 'indexEvent'])->name('events.index');
Route::get('/event-create', [EventController::class, 'createEvent'])->name('events.create');
Route::post('/event-store', [EventController::class, 'storeEvent'])->name('events.store');
Route::get('/event-edit/{id}', [EventController::class, 'editEvent'])->name('events.edit');
Route::put('/event-update/{id}', [EventController::class, 'updateEvent'])->name('events.update');
Route::get('/event-show', [EventController::class, 'showEvent'])->name('events.show');
Route::get('/event-destroy/{id}', [EventController::class, 'destroyEvent'])->name('events.destroy');

//Event user
Route::get('/eventUser-index', [EventUserController::class, 'indexEventUser'])->name('eventUser.index');
Route::get('/eventUser-create', [EventUserController::class, 'createEventUser'])->name('eventUser.create');
Route::post('/eventUser-store', [EventUserController::class, 'storeEventUser'])->name('eventUser.store');
Route::get('/eventUser-edit/{id}', [EventUserController::class, 'editEventUser'])->name('eventUser.edit');
Route::put('/eventUser-update/{id}', [EventUserController::class, 'updateEventUser'])->name('eventUser.update');
Route::get('/eventUser-show', [EventUserController::class, 'showEventUser'])->name('eventUser.show');
Route::get('/eventUser-destroy/{id}', [EventUserController::class, 'destroyEventUser'])->name('eventUser.destroy');

//Associated
Route::get('/associated-index', [AssociatedController::class, 'indexAssociated'])->name('associated.index');
Route::get('/associated-create', [AssociatedController::class, 'createAssociated'])->name('associated.create');
Route::post('/associated-store', [AssociatedController::class, 'storeAssociated'])->name('associated.store');
Route::get('/associated-edit/{id}', [AssociatedController::class, 'editAssociated'])->name('associated.edit');
Route::put('/associated-update/{id}', [AssociatedController::class, 'updateAssociated'])->name('associated.update');
Route::get('/associated-show', [AssociatedController::class, 'showAssociated'])->name('associated.show');
Route::get('/associated-destroy/{id}', [AssociatedController::class, 'destroyAssociated'])->name('associated.destroy');

