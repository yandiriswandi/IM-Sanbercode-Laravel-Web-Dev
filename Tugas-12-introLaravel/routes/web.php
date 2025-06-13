<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get('/',[DashboardController::class,'home']);
Route::get('/register',[FormController::class,'register']);
Route::post('/welcome',[FormController::class,'welcome']);

Route::get('/genre/create',[GenreController::class,'create']);
Route::post('/genre',[GenreController::class,'store']);
Route::get('/genre',[GenreController::class,'index']);
Route::get('/genre/{id}',[GenreController::class,'show']);

Route::get('/genre/{id}/edit',[GenreController::class,'edit']);
Route::put('/genre/{id}',[GenreController::class,'update']);
Route::delete('/genre/{id}',[GenreController::class,'destroy']);






