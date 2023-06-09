<?php

use App\Http\Controllers\AssociatedController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ChildrenController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

//vista contacto footer
Route::get('/contacto', function () {
    return view('footer.contactoFooter');
});


//Formulario peque ruta
Route::get('/pequeruta', function () {
    return view('forms.rutaPequeForm');
});

//Formulario banco libros
Route::get('/banco-libros', function () {
    return view('forms.banco-libros');
});
//Formulario asociado vista usuario
Route::get('/asociate', function () {
    return view('associated.formAsociate');
});

//Formulario banco libros
Route::get('/bancolibros', function () {
    return view('forms.banco-libros');
});

Route::get('/dash', function () {
    return view('user.index', ['user' => app()->make('App\Http\Controllers\UserController')->userIndex()]);
})->name('dash');

Route::get('/dashboard', function () {
    return view('home-dashboard');
})->name('dashboard');

Route::get('/associated', function () {
    return view('associated.show');
})->name('associated.show');

Route::get('/user', function () {
    return view('user.index');
})->name('user.index');

Route::get('/rutas', function () {
    return view('rutas.index');
})->name('rutas.index');

Route::get('/talleres', function () {
    return view('talleres.index');
})->name('talleres.index');

Route::get('/libros', function () {
    return view('libros.index');
})->name('libros.index');

Route::get('/pagos', function () {
    return view('pagos.index');
})->name('pagos.index');

Route::get('/roles', function () {
    return view('roles.index');
})->name('roles.index');

Route::get('/logout', function () {
    return view('logout.index');
})->name('logout.index');

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
Route::match(['get', 'post'], '/associated-index', [AssociatedController::class, 'indexAssociated'])->name('associated.index');
Route::post('/associated-create', [AssociatedController::class, 'createAssociated'])->name('associated.create');
Route::post('/associated-store', [AssociatedController::class, 'storeAssociated'])->name('associated.store');
Route::get('/associated-edit/{id}', [AssociatedController::class, 'editAssociated'])->name('associated.edit');
Route::put('/associated-update/{id}', [AssociatedController::class, 'updateAssociated'])->name('associated.update');
Route::get('/associated-show', [AssociatedController::class, 'showAssociated'])->name('associated.show');
Route::delete('/associated-destroy/{id}', [AssociatedController::class, 'destroyAssociated'])->name('associated.destroy');

//BLOG
// Ruta para mostrar todos los blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');


// Ruta para mostrar el formulario de creación de un blog
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');

// Ruta para guardar un nuevo blog
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');

// Ruta para mostrar un blog específico
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blogs.show');

// Ruta para mostrar el formulario de edición de un blog
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('posts.edit');

// Ruta para actualizar un blog existente
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('posts.update');

// Ruta para eliminar un blog
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('posts.destroy');

//Stripe
Route::post('/create-checkout-session', 'StripeController@createCheckoutSession');

//Ruta para la página de suscripción
Route::get('/suscripcion', [SubscriptionController::class, 'index'])->name('subscription.index');
Route::post('/suscripcion/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscription.subscribe');
Route::post('/stripe/webhook', 'WebhookController@handleWebhook');

//Ruta para la página de suscripción
Route::get('/suscripcion', [SubscriptionController::class, 'index'])->name('subscription.index');
Route::post('/suscripcion/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscription.subscribe');
Route::post('/stripe/webhook', 'WebhookController@handleWebhook');

//Calendario
Route::get('/calendar', function () {
    return view('components.calendar');
});