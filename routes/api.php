<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ArticuloController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [RegistroController::class, 'index']);
// Route::get('/userss', [RegistroController::class, 'index2']);
Route::get('/users/create', [RegistroController::class, 'create']);
Route::post('/users', [RegistroController::class, 'store']);
Route::get('/users/{id}', [RegistroController::class, 'show']);
Route::get('/users/{id}/edit', [RegistroController::class, 'edit']);
Route::put('/users/{id}', [RegistroController::class, 'update']);
Route::delete('/users/{id}', [RegistroController::class, 'destroy']);

Route::get('/articulos', [ArticuloController::class, 'index']);
Route::get('/articulos/create', [ArticuloController::class, 'create']);
Route::post('/articulos', [ArticuloController::class, 'store']);


