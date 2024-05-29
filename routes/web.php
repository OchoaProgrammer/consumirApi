<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\ClientesController;


Route::get('/', [ClientesController::class, 'index'])->name('clientes.index');
Route::get('/cliente', [ClientesController::class, 'create'])->name('cliente.create');
Route::post('/cliente', [ClientesController::class, 'store'])->Name('cliente.store');
Route::get('/cliente/{idClient}', [ClientesController::class, 'view'])->name('cliente.view');
Route::post('/cliente/update', [ClientesController::class, 'update'])->name('cliente.update');
Route::get('/cliente/destroy/{id}', [ClientesController::class, 'destroy'])->name('cliente.delete');
