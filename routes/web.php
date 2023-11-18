<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/conceptos', App\Http\Controllers\ConceptoController::class);
Route::resource('/estudiantes', App\Http\Controllers\EstudianteController::class);
Route::resource('/egresos', App\Http\Controllers\EgresoController::class);
Route::resource('/ingresos', App\Http\Controllers\IngresoController::class);