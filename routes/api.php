<?php


use App\Http\Controllers\TestBienestarController;
use App\Http\Controllers\TestInicialController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\InformacionFrutasController;
use App\Http\Controllers\SeguimientoProcesoController;
use App\Http\Controllers\ForoController;
use Illuminate\Support\Facades\Route;


Route::post('/test-bienestar', [TestBienestarController::class, 'store']);
Route::get('/test-inicial', [TestInicialController::class, 'index']);
Route::get('/inicio', [InicioController::class, 'index']);
Route::get('/informacion-frutas', [InformacionFrutasController::class, 'index']);
Route::get('/seguimiento-proceso', [SeguimientoProcesoController::class, 'index']);
Route::get('/foro', [ForoController::class, 'index']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/objetivo', [ObjetivoSaludController::class, 'index']);
    Route::post('/objetivo', [ObjetivoSaludController::class, 'store']);
    Route::put('/objetivo/{id}', [ObjetivoSaludController::class, 'update']);
    Route::get('/historial', [ObjetivoSaludController::class, 'historial']);
});
/*
Route::get('/test-inicial', [ApiController::class, 'testInicial']);
Route::get('/inicio', [ApiController::class, 'inicio']);
Route::get('/frutas', [ApiController::class, 'informacionFrutas']);
Route::get('/seguimiento', [ApiController::class, 'seguimientoProceso']);
Route::get('/foro', [ApiController::class, 'foro']);


Route::get('/test', function () {
    return response()->json(['message' => 'API funcionando en Laravel 12']);
});
*/