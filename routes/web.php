<?php

use Illuminate\Support\Facades\Route;

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

Route::get('equipo-audiovisual', function () {
    return view('equipo-audiovisual');
});

Route::get('dlux-dj', function () {
    return view('dlux-dj');
});

Route::get('calypso', function () {
    return view('calypso');
});

//Modificar esta ruta con la vista del sistema para los usuarios
Route::get('/', function () {
    return view('auth/windmill-login');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
