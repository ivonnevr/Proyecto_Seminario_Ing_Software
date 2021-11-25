<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\DjcotizacionController;
use App\Http\Controllers\CalypsocotizacionController;
use App\Http\Controllers\ContactoController;

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

// Route::get('audiovisuales', function () {
//     return view('equipo-audiovisual');
// });

// Route::get('audiovisuales', [EquipoController::class, 'index']);

Route::resource('equipo', EquipoController::class);

// Route::get('dlux', function () {
//     return view('dlux-dj');
// });

// Route::get('dlux', [DjcotizacionController::class, 'index']);

Route::resource('djcotizacion', DjcotizacionController::class);

// Route::get('calypso', function () {
//     return view('calypso');
// });

// Route::get('calypso', [CalypsocotizacionController::class, 'index']);

Route::resource('calypsocotizacion', CalypsocotizacionController::class);

// Route::get('contacto', function () {
//     return view('contacto');
// });

// Route::get('contacto', [ContactoController::class, 'index']);

Route::resource('contacto', ContactoController::class);

Route::get('/', function () {
    return view('auth/windmill-login');
});

Route::get('/index', function () {
    return view('index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
