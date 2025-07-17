<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsroomController;
use App\Http\Livewire\DonationForm;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Home Routes
Route::get('/', [HomeController::class, 'index']);

//About Routes  
Route::get('/about', function () {
    return view('frontend.about');
});


//Contact Routes  
Route::get('/team', function () {
    return view('frontend.team');
});


//blog-details Routes  
Route::get('/blog-details', function () {
    return view('frontend.blog-details');
});



//faq Routes  
Route::get('/faq', function () {
    return view('frontend.faq');
});


//Contact Routes  
Route::get('/contact', function () {
    return view('frontend.contact');
});

//Login Routes  
Route::get('/login', function () {
    return view('frontend.login');
});

//Contact Routes  
Route::get('/sign-up', function () {
    return view('frontend.sign-up');
});



//Contact Routes  
Route::get('/gallery', function () {
    return view('frontend.gallery');
});



//Home Routes
Route::get('/', [HomeController::class, 'index']);

//Event Routes
Route::get('/events', [EventController::class, 'index'])->name('frontend.archive.events');
//Blog Routes
Route::get('/posts', [PostController::class, 'index'])->name('frontend.archive.blogs');


//Payment Routes
//Donation Route
Route::get('/donate', DonationForm::class)->name('donate');


//News Routes
Route::get('/news', [NewsController::class, 'newsletterArchive'])->name('newsroom.newsletters');


require __DIR__.'/auth.php';
