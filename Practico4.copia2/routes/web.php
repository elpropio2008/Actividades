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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
 //   return view('welcome');
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