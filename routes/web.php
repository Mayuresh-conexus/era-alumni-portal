<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsroomController;
use App\Http\Livewire\DonationForm;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//Event Routes
Route::get('/events', [EventController::class, 'index'])->name('events.index');
//Blog Routes
Route::get('/posts', [PostController::class, 'index'])->name('blogs.index');


//Payment Routes
//Donation Route
Route::get('/donate', DonationForm::class)->name('donate');

//News Routes
Route::get('/news', [NewsController::class, 'newsletterArchive'])->name('newsroom.newsletters');


require __DIR__.'/auth.php';
