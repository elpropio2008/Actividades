<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CuentaController;
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

//Route::get('/', function () {
//    return view('FrmCategoria');
//});
//Route::get('/Cuenta', 'CuentaController@index');
Route::get('/', [CuentaController::class , 'index']);
Route::post('/Agregar',[CuentaController::class,'store']);
Route::get('/Editar/{id}',[CuentaController::class,'edit']);
Route::put('/Actualizar/{id}',[CuentaController::class,'update']);
Route::delete('/Eliminar/{id}',[CuentaController::class,'destroy']);

Route::get('/Clientes', [ClienteController::class , 'index']);
Route::post('/AgregarCliente',[ClienteController::class,'store']);

Route::get('/EditarCliente/{id}',[ClienteController::class,'edit']);
Route::put('/ActualizarCliente/{id}',[ClienteController::class,'update']);

Route::delete('/EliminarCliente/{id}',[ClienteController::class,'destroy']);