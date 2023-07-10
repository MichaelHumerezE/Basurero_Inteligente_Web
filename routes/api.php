<?php

use App\Http\Controllers\API\AuthChoferController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ChoferController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

// Route::post('/register', [AuthController::class, 'register']);

// Route::post('/login', [AuthController::class, 'login']);
Route::post('/login', [AuthChoferController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthChoferController::class, 'logout']);
    Route::get('/listaEmpleados', [ChoferController::class, 'listaEmpleados']);
    Route::get('/listarCamiones', [ChoferController::class, 'listarCamiones']);
    Route::post('/registrarEquipoDeRecorrido', [ChoferController::class, 'registrarEquipoDeRecorrido']);
    Route::get('/listarRutas', [ChoferController::class, 'listarRutas']);
    Route::post('/obtenerCoordenadaDeLaRuta', [ChoferController::class, 'obtenerCoordenadaDeLaRuta']);
    Route::post('/guardarRecorridoDelChofer', [ChoferController::class, 'guardarRecorridoDelChofer']);

});
