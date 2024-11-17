<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DContactoController;
use App\Http\Controllers\DetalleRepuestoController;
use App\Http\Controllers\DetalleServicioController;
use App\Http\Controllers\MecanicoController;
use App\Http\Controllers\ModelosAutoController;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RegistrosFechaController;
use App\Http\Controllers\RepuestoController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\VehiculoController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(DContactoController::class)->group(function(){

    Route::get('/d_contactos/datos','getData');
    Route::get('/d_contactos/datosById','getDataById');
    Route::post('/d_contactos/save','save');
    Route::put('/d_contactos/update','update');
    Route::delete('/d_contactos/delete','delete');
    
    });
    Route::controller(DetalleRepuestoController::class)->group(function(){
    
    Route::get('/detalle_repuestos/datos','getData');
    Route::get('/detalle_repuestos/datosById','getDataById');
    Route::post('/detalle_repuestos/save','save');
    Route::put('/detalle_repuestos/update','update');
    Route::delete('/detalle_repuestos/delete','delete');
    
    });
    Route::controller(DetalleServicioController::class)->group(function(){
    
    Route::get('/detalle_servicios/datos','getData');
    Route::get('/detalle_servicios/datosById','getDataById');
    Route::post('/detalle_servicios/save','save');
    Route::put('/detalle_servicios/update','update');
    Route::delete('/detalle_servicios/delete','delete');
    
    });
    Route::controller(MecanicoController::class)->group(function(){
    
    Route::get('/mecanicos/datos','getData');
    Route::get('/mecanicos/datosById','getDataById');
    Route::post('/mecanicos/save','save');
    Route::put('/mecanicos/update','update');
    Route::delete('/mecanicos/delete','delete');
    
    });
    Route::controller(ModelosAutoController::class)->group(function(){
    
    Route::get('/modelos_autos/datos','getData');
    Route::get('/modelos_autos/datosById','getDataById');
    Route::post('/modelos_autos/save','save');
    Route::put('/modelos_autos/update','update');
    Route::delete('/modelos_autos/delete','delete');
    
    });
    Route::controller(PropietarioController::class)->group(function(){
    
    Route::get('/propietarios/datos','getData');
    Route::get('/propietarios/datosById','getDataById');
    Route::post('/propietarios/save','save');
    Route::put('/propietarios/update','update');
    Route::delete('/propietarios/delete','delete');
    
    });
    Route::controller(RegistroController::class)->group(function(){
    
    Route::get('/registros/datos','getData');
    Route::get('/registros/datosById','getDataById');
    Route::post('/registros/save','save');
    Route::put('/registros/update','update');
    Route::delete('/registros/delete','delete');
    
    });
    Route::controller(RepuestoController::class)->group(function(){
    
    Route::get('/repuestos/datos','getData');
    Route::get('/repuestos/datosById','getDataById');
    Route::post('/repuestos/save','save');
    Route::put('/repuestos/update','update');
    Route::delete('/repuestos/delete','delete');
    
    });
    Route::controller(ServicioController::class)->group(function(){
    
    Route::get('/servicios/datos','getData');
    Route::get('/servicios/datosById','getDataById');
    Route::post('/servicios/save','save');
    Route::put('/servicios/update','update');
    Route::delete('/servicios/delete','delete');
    
    });
    Route::controller(VehiculoController::class)->group(function(){
    
    Route::get('/vehiculos/datos','getData');
    Route::get('/vehiculos/datosById','getDataById');
    Route::post('/vehiculos/save','save');
    Route::put('/vehiculos/update','update');
    Route::delete('/vehiculos/delete','delete');
    
    });