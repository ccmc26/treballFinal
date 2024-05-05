<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\ComentarioController;

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
Route::get('/articulos/{id}', [ArticuloController::class, 'show']);
Route::get('/articulos/{id}/edit', [ArticuloController::class, 'edit']);
Route::put('/articulos/{id}', [ArticuloController::class, 'update']);
Route::delete('/articulos/{id}', [ArticuloController::class, 'destroy']);

Route::get('/comentarios', [ComentarioController::class, 'index']);
Route::get('/comentarios/create', [ComentarioController::class, 'create']);
Route::post('/comentarios', [ComentarioController::class, 'store']);
Route::get('/comentarios/{id}', [ComentarioController::class, 'show']);
Route::get('/comentarios/{id}/edit', [ComentarioController::class, 'edit']);
Route::put('/comentarios/{id}', [ComentarioController::class, 'update']);
Route::delete('/comentarios/{id}', [ComentarioController::class, 'destroy']);
