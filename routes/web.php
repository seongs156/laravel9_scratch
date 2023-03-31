<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/articles', [App\Http\Controllers\ArticlesController::class,'index'])->name('articles.index');
Route::post('articles', [App\Http\Controllers\ArticlesController::class,'store']);
Route::get('/articles/create', [App\Http\Controllers\ArticlesController::class,'create']);
Route::get('/articles/{article}', [App\Http\Controllers\ArticlesController::class,'show'])->name('articles.show');
Route::get('/articles/{article}/edit', [App\Http\Controllers\ArticlesController::class,'edit']);
Route::put('/articles/{article}', [App\Http\Controllers\ArticlesController::class,'update']);
