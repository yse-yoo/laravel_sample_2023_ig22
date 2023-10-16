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

// HomeController Routing
Route::get('/about', [HomeController::class, 'about']);
Route::get('/search', [HomeController::class, 'search']);
Route::get('/item/{id}', [ItemController::class, 'show']);

// ItemController Routing
Route::get('/dp/{id}', [ItemController::class, 'show']);

// /about でアクセスしたときのルーティング(GET)
// Route::get('/about', function () {
//     return view('about');
// });

// /item/xx でアクセスしたときのルーティング(GET)
// Route::get('/item/{id}', function ($id) {
//     $message = "Product ID is {$id}";
//     return $message;
// });

// Amazonのようなアクセスしたときのルーティング(GET)
// Route::get('/dp/{id}', function ($id) {
//     $message = "Product ID is {$id}";
//     return $message;
// });

// Googleのようなアクセス（クエリーパラメータを利用）したときのルーティング(GET)
// Route::get('/search', function (Request $request) {
//     // $message = "Search word is {$request->q}";
//     // Arrayデータ
//     $data = [
//         'keyword' => $request->q
//     ];
//     // Viewにデータを渡す
//     return view('search', $data);
// });

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
