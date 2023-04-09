<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', [NewsController::class, 'index'])->name('news_showAll');
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news_showOne');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::resource('news', \App\Http\Controllers\Admin\NewsController::class);
});

require __DIR__.'/auth.php';
