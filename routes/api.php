<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\User_LanguageController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/users', [RegistroController::class, 'index']);

Route::get('/userss', [RegistroController::class, 'index2']);

Route::get('/users/create',[RegistroController::class, 'create']);
Route::post('/users', [RegistroController::class, 'store']);
Route::get('/users/{id}', [RegistroController::class, 'show']);
Route::get('/users/{id}/edit', [RegistroController::class, 'edit']);
Route::put('/users/{id}', [RegistroController::class, 'update']);
Route::delete('/users/{id}', [RegistroController::class, 'destroy']);

Route::get('/languages', [LanguageController::class, 'index']);
Route::get('/languages/create', [LanguageController::class, 'create']);
Route::post('/languages', [LanguageController::class, 'store']);
Route::get('/languages/{id}', [LanguageController::class, 'show']);
Route::put('/languages/{id}', [LanguageController::class, 'update']);
Route::delete('/languages/{id}', [LanguageController::class, 'destroy']);

Route::get('/user_languages', [User_LanguageController::class, 'index']);
Route::get('/user_languages/create', [User_LanguageController::class, 'create']);
Route::post('/user_languages', [User_LanguageController::class, 'store']);
Route::get('/user_languages/{id}', [User_LanguageController::class, 'show']);
// Route::get('/user_languages/{id}/edit', [User_LanguageController::class, 'edit']);
Route::put('/user_languages/{id}', [User_LanguageController::class, 'update']);
Route::delete('/user_languages/{id}', [User_LanguageController::class, 'destroy']);

Route::get('/logs', [LogController::class, 'index']);
Route::get('/logs/create', [LogController::class, 'create']);
Route::delete('/logs/{id}', [LogController::class, 'destroy']);
