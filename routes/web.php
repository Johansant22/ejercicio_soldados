<?php

use App\Http\Controllers\BarrackController;
use App\Http\Controllers\BodyController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\SoldierController;
use Illuminate\Support\Facades\Route;

Route::get('/formularioCompania',[CompanyController::class, 'mostrar']);
Route::post('/storeCompania',[CompanyController::class, 'store'])->name('Compania.store');

Route::get('/formularioCuartel',[BarrackController::class, 'mostrar']);
Route::post('/storeCuartel',[BarrackController::class, 'store'])->name('store.Cuartel');

Route::get('/formularioCuerpo',[BodyController::class, 'mostrar']);
Route::post('/storeCuerpo',[BodyController::class, 'store'])->name('store.Cuerpo');

Route::get('/formularioSoldado',[SoldierController::class, 'mostrar']);
Route::post('/storeSoldado',[SoldierController::class, 'store'])->name('store.Soldado');

