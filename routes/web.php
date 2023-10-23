<?php

use App\Http\Controllers\Article\DetailArticleController;
use App\Http\Controllers\Article\ListArticlesController;
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
    return view('welcome');
});

Route::get('/master', function () {
    return view('frontend.master');
});

Route::get('/profil', function () {
    return view('profile');
});

Route::prefix('articles')->group(function () {
    Route::get('/', ListArticlesController::class)->name('list_articles');
    Route::get('/{article}', DetailArticleController::class)->name('detail_article');
});
