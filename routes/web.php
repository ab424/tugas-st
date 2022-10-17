<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;


Route::get('/', [MahasiswaController::class , 'index']);
Route::get('/create', [MahasiswaController::class , 'create']);
Route::post('/store', [MahasiswaController::class, 'store']);
Route::get('/show/{id}', [MahasiswaController::class, 'show']);
Route::post('/update/{id}', [MahasiswaController::class, 'update']);
Route::get('/destroy/{id}', [MahasiswaController::class, 'destroy']);
