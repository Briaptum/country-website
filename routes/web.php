<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return redirect()->route('index.index');
});

Route::get('/index', [IndexController::class, 'index'])->name('index.index');
Route::get('/about', [AboutController::class, 'about'])->name('about.about');
