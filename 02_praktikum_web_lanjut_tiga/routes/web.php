<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PhotoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']) -> name('home');

Route::prefix('category') -> group (function () {
    Route::get('/marbel-edu-games', [ProductsController::class, 'edu']);
    Route::get('/marbel-and-friends-kids-games', [ProductsController::class, 'kids']);
    Route::get('/riri-story-books', [ProductsController::class, 'riri']);
    Route::get('/kolak-kids-songs', [ProductsController::class, 'kolak']);
}) -> name('category');

Route::get('/news/{topic?}', [NewsController::class, 'news']) -> name('news');

Route::prefix('program') -> group (function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
}) -> name('program');

Route::get('/about-us', [AboutController::class, 'about']) -> name('about');

Route::resource('contact-us', PhotoController::class) -> only([
    'index', 'store'
]);