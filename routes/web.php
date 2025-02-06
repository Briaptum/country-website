<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


Route::get('/', function () {
    return redirect()->route('index.index');
});

Route::get('/index', [IndexController::class, 'index'])->name('index.index');
