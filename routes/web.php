<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/menu', [MenuController::class, 'index']);
Route::get('/menu/{slug}', [MenuController::class, 'category']);
Route::get('/menu/{category}/{product}', [MenuController::class, 'show']);