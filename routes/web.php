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

Route::get('/', function () {
    return view('index');
});

// Route::get('equipos', function () {
//     return view('equipos');
// });

Route::get('equipos', [EquipoController::class, 'create']);

Route::resource('equipo', EquipoController::class);

// Route::get('dluxdj', function () {
//     return view('dluxDJ');
// });

Route::get('dluxdj', [DjcotizacionController::class, 'create']);

Route::resource('djcotizacion', DjcotizacionController::class);

// Route::get('grupocalypso', function () {
//     return view('grupoCalypso');
// });

Route::get('grupocalypso', [CalypsocotizacionController::class, 'create']);

Route::resource('calypsocotizacion', CalypsocotizacionController::class);

// Route::get('contacto', function () {
//     return view('contacto');
// });

Route::get('contactos', [ContactoController::class, 'create']);

Route::resource('contacto', ContactoController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
