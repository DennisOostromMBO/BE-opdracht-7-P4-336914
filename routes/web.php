<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructeurController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/instructeurs', [InstructeurController::class, 'index'])->name('instructeurs.index');
Route::get('/instructeurs/{id}/voertuigen', [InstructeurController::class, 'voertuigen'])->name('instructeurs.voertuigen');
Route::get('/instructeurs/{id}/voertuigen/{voertuig}/edit', [InstructeurController::class, 'editVoertuig'])->name('voertuigen.edit');
Route::post('/instructeurs/{id}/voertuigen/{voertuig}/update', [InstructeurController::class, 'updateVoertuig'])->name('voertuigen.update');
Route::get('/instructeurs/{id}/beschikbare-voertuigen', [InstructeurController::class, 'beschikbareVoertuigen'])->name('instructeurs.beschikbare-voertuigen');
Route::post('/instructeurs/{id}/voertuig/{voertuig}/assign', [InstructeurController::class, 'assignVoertuig'])->name('voertuigen.assign');
