<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
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
// routes/web.php


// HomeController Routing
Route::get('/about', [HomeController::class, 'about'])->name('about');
// Route::get('/about', 'HomeController@about')->name('about');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/update/{id}', [HomeController::class, 'update']);

// ItemController Routing
Route::get('/dp/{id}', [ItemController::class, 'show']);
Route::get('/item/', [ItemController::class, 'index'])->name('item.index');
Route::get('/item/{id}', [ItemController::class, 'show'])->name('item.show');

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

require __DIR__ . '/auth.php';
