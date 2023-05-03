<?php

use App\Models\Article;
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
})->name('home');

Route::get('/Create-article', function () {
    return view('articleCreate');
})->name('create.article');

Route::get('/article/edit/{article}', function (Article $article) {
    return view('articleEdit', compact('article'));
})->name('article.edit');