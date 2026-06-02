<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ConsolaController;
use App\Http\Controllers\VideojuegoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\SucursalController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\RentaController;
use App\Http\Controllers\DetalleRentaController;
use App\Http\Controllers\PagoController;

Route::view('/', 'inicio');


// CLIENTES
Route::get('/clientes', [ClienteController::class, 'formulario'])->name('clientes.formulario');
Route::post('/clientes/guardar', [ClienteController::class, 'guardar'])->name('clientes.guardar');


// CONSOLAS
Route::get('/consolas', [ConsolaController::class, 'formulario'])->name('consolas.formulario');
Route::post('/consolas/guardar', [ConsolaController::class, 'guardar'])->name('consolas.guardar');


// VIDEOJUEGOS
Route::get('/videojuegos', [VideojuegoController::class, 'formulario'])->name('videojuegos.formulario');
Route::post('/videojuegos/guardar', [VideojuegoController::class, 'guardar'])->name('videojuegos.guardar');


// CATEGORIAS
Route::get('/categorias', [CategoriaController::class, 'formulario'])->name('categorias.formulario');
Route::post('/categorias/guardar', [CategoriaController::class, 'guardar'])->name('categorias.guardar');


// PROVEEDORES
Route::get('/proveedores', [ProveedorController::class, 'formulario'])->name('proveedores.formulario');
Route::post('/proveedores/guardar', [ProveedorController::class, 'guardar'])->name('proveedores.guardar');


// SUCURSALES
Route::get('/sucursales', [SucursalController::class, 'formulario'])->name('sucursales.formulario');
Route::post('/sucursales/guardar', [SucursalController::class, 'guardar'])->name('sucursales.guardar');


// EMPLEADOS
Route::get('/empleados', [EmpleadoController::class, 'formulario'])->name('empleados.formulario');
Route::post('/empleados/guardar', [EmpleadoController::class, 'guardar'])->name('empleados.guardar');


// RENTAS
Route::get('/rentas', [RentaController::class, 'formulario'])->name('rentas.formulario');
Route::post('/rentas/guardar', [RentaController::class, 'guardar'])->name('rentas.guardar');


// DETALLES RENTAS
Route::get('/detalles-rentas', [DetalleRentaController::class, 'formulario'])->name('detalles-rentas.formulario');
Route::post('/detallesrentas/guardar', [DetalleRentaController::class, 'guardar'])->name('detallesrentas.guardar');


// PAGOS
Route::get('/pagos', [PagoController::class, 'formulario'])->name('pagos.formulario');
Route::post('/pagos/guardar', [PagoController::class, 'guardar'])->name('pagos.guardar');