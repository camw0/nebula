<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Nebula\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return Inertia::render('Admin/Dashboard');
})->name('admim:dashboard');
