<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;
use App\Http\Controllers\pageController;

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

Route::get('/', [mainController::class, 'main'])->name('home');
Route::get('/search', [pageController::class, 'search'])->name('search');
Route::get('/article/{id}', [pageController::class, 'article'])->name('article');
Route::get('/news', [pageController::class, 'news'])->name('news');
Route::get('/popular', [pageController::class, 'popular'])->name('pop_arts');
Route::get('/all', [pageController::class, 'all'])->name('all');
Route::get('/sport', [pageController::class, 'sport'])->name('sport');
Route::get('/travels', [pageController::class, 'travels'])->name('travels');
Route::get('/art', [pageController::class, 'art'])->name('art');
Route::get('/science', [pageController::class, 'science'])->name('science');
Route::get('/business', [pageController::class, 'business'])->name('business');
Route::get('/tech', [pageController::class, 'tech'])->name('tech');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';

//->middleware(['auth'])