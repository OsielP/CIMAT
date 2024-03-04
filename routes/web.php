<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AplicacionController;
use App\Http\Controllers\DescargarAplicacionController;


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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/nosotros', function () {
        return view('nosotros');
    })->name('nosotros');
});


Route::get('/subir-apk', function () {
    return view('subir_aplicacion'); // Asegúrate de que la vista se llame 'subir_aplicacion.blade.php'
})->name('subir-aplicacion');

Route::get('/listar-aplicaciones', [AplicacionController::class, 'listarAplicaciones'])->name('aplicaciones.listar');



//rutas para subir aplicaciones
Route::get('/subir-apk', function () {
    return view('subir_aplicacion'); // Asegúrate de que la vista se llame 'subir_aplicacion.blade.php'
})->name('subir-aplicacion');
Route::post('/subir-apk', [AplicacionController::class, 'subirArchivo']);

//rutas para descargar aplicaciones
Route::get('/listar-aplicaciones', [AplicacionController::class, 'listarAplicaciones'])->name('aplicaciones.listar');

Route::get('/descargar-aplicacion/{id}', [AplicacionController::class, 'descargarAplicacion'])->name('descargar.aplicacion');
Route::get('/descargar-aplicacion/{id}', 'DescargarAplicacionController@descargar');
Route::get('/descargar-aplicacion/{id}', [DescargarAplicacionController::class, 'descargar']);





Route::get('/categorias/lectura', [AplicacionController::class, 'mostrarAplicacionesLectura']);

Route::get('/categorias/matematicas', [AplicacionController::class, 'mostrarAplicacionesMatematicas']);

Route::get('/categorias/geografia', [AplicacionController::class, 'mostrarAplicacionesGeografia']);

Route::get('/categorias/realidad_virtual', [AplicacionController::class, 'mostrarAplicacionesRealidadVirtual']);

Route::get('/categorias/escritura', [AplicacionController::class, 'mostrarAplicacionesEscritura']);

Route::get('/categorias/competencias_basicas', [AplicacionController::class, 'mostrarAplicacionesCompetenciasBasicas']);

Route::get('/categorias/entretenimiento', [AplicacionController::class, 'mostrarAplicacionesEntretenimiento']);


Route::get('/buscar', [AplicacionController::class, 'buscar'])->name('buscar');




Route::get('/eliminar-aplicacion/{id}', [AplicacionController::class, 'eliminarAplicacion'])->name('eliminar-aplicacion');
