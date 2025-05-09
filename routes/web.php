<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructeurController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instructeurs', [InstructeurController::class, 'index'])->name('instructeurs.index');
Route::get('/instructeurs/{id}/voertuigen', [InstructeurController::class, 'voertuigen'])->name('instructeurs.voertuigen');
