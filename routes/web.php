<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/categories');
});

Route::resource('categories', CategoryController::class);
