<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog/adicionar', [BlogController::class, 'adicionar']);
Route::get('/blog/remover', [BlogController::class, 'remover']);
