<?php
use App\Http\Controllers\MotoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MotoController::class, 'index'])->name('motos.index');
Route::post('/motos/{moto}/statut', [MotoController::class, 'changerStatut'])->name('motos.statut');
Route::resource('motos', MotoController::class);