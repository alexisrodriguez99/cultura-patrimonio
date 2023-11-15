<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\ComplejoController;
use App\Http\Controllers\OficinaController;
use App\Http\Controllers\PatrimonioController;
use App\Http\Controllers\PisoController;
use App\Http\Controllers\TipoBienController;
use App\Http\Controllers\TipoIngresoController;
use App\Http\Controllers\UbicacionesController;
use App\Http\Controllers\UnidadFuncionalController;
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

Route::get('/', function () {
    return redirect('patrimonio');
});


//Login routes
Route::prefix('auth')->group(function () {
    Route::get('/', [LoginController::class, 'create'])->name('login');
    Route::post('/', [LoginController::class, 'store'])->name('login.store');
    Route::post('/asd', [LoginController::class, 'asd'])->name('login.asd');

});

//Patrimonio routes
Route::prefix('patrimonio')->group(function () {
    Route::get('/', [PatrimonioController::class, 'index'])->name('patrimonio.index');
    Route::get('/create', [PatrimonioController::class, 'create'])->name('patrimonio.create');
    Route::post('/', [PatrimonioController::class, 'store'])->name('patrimonio.store');
});

//Rutas de Seccion Administracion
Route::resource('complejos', ComplejoController::class);
Route::resource('unidades-funcionales', UnidadFuncionalController::class);
Route::resource('pisos', PisoController::class);
Route::resource('oficinas', OficinaController::class);

Route::resource('ubicaciones', UbicacionesController::class);
Route::resource('tipos-bien', TipoBienController::class);

Route::resource('tipos-ingreso', TipoIngresoController::class);
Route::get('tipos-ingreso/deshabilitar/{id}', [TipoIngresoController::class, 'disable'])->name('tipos-ingreso.disable');
Route::get('tipos-ingreso/habilitar/{id}', [TipoIngresoController::class, 'enable'])->name('tipos-ingreso.enable');
