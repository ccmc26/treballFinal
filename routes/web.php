<?php

use App\Http\Controllers\ArticuloController;
use App\Http\Controllers\LanguageViewController;
use App\Http\Controllers\User_LanguageViewController;
use App\Models\Articulo;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::get('/articulos', function(){
    return Inertia::render('ListadoArticulo', ['articulos' => Articulo::get()]);
})->name('productos');

Route::post('/articulos', function(){
    return Inertia::render('FormularioArticulo');
})->name('subir');



// Route::middleware(['auth'])->group(function () {
//     Route::resource('/language', LanguageViewController::class);
// });

// Route::middleware(['auth'])->group(function () {
//     Route::resource('/uslang', User_LanguageViewController::class);
// });

