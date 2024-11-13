<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use Illuminate\Support\Facades\Route;

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    // Rutas de Productos
    Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');
    Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');
    Route::post('productos', [ProductoController::class, 'store'])->name('productos.store');
    Route::get('productos/{id}', [ProductoController::class, 'show'])->name('productos.show');
    Route::get('productos/{id}/edit', [ProductoController::class, 'edit'])->name('productos.edit');
    Route::put('productos/{id}', [ProductoController::class, 'update'])->name('productos.update');
    Route::delete('productos/{id}', [ProductoController::class, 'destroy'])->name('productos.destroy');

    // Rutas de Clientes
    Route::get('clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::get('clientes/create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('clientes/{id}', [ClienteController::class, 'show'])->name('clientes.show');
    Route::get('clientes/{id}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('clientes/{id}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('clientes/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

    // Rutas de Proveedores
    Route::get('proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');
    Route::get('proveedores/create', [ProveedorController::class, 'create'])->name('proveedores.create');
    Route::post('proveedores', [ProveedorController::class, 'store'])->name('proveedores.store');
    Route::get('proveedores/{id}', [ProveedorController::class, 'show'])->name('proveedores.show');
    Route::get('proveedores/{id}/edit', [ProveedorController::class, 'edit'])->name('proveedores.edit');
    Route::put('proveedores/{id}', [ProveedorController::class, 'update'])->name('proveedores.update');
    Route::delete('proveedores/{id}', [ProveedorController::class, 'destroy'])->name('proveedores.destroy');
});
