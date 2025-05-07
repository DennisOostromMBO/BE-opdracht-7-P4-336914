<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructeurController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instructeurs', [InstructeurController::class, 'index'])->name('instructeurs.index');
