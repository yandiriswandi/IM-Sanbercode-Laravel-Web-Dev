<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController;

Route::get('/game', [GameController::class, 'index'])->name('game.index');
Route::get('/game/create', [GameController::class, 'create'])->name('game.create');
Route::post('/game', [GameController::class, 'store'])->name('game.store');
Route::get('/game/{id}', [GameController::class, 'show'])->name('game.show');
Route::get('/game/{id}/edit', [GameController::class, 'edit'])->name('game.edit');
Route::put('/game/{id}', [GameController::class, 'update'])->name('game.update');
Route::delete('/game/{id}', [GameController::class, 'destroy'])->name('game.destroy');

