<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\LibrosController;
use \App\Http\Controllers\CortosController;
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
    return view('Home');
})->name('Home');

Route::resource('Libros', LibrosController::class);
Route::resource('Cortos', CortosController::class);


