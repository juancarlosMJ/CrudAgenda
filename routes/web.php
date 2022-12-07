<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContactosController;
use Illuminate\Support\Facades\Route;

/*

*/

Route::get('/', function () {
    return view('inicio');
})->name("inicio");

/*
Aqui separamos las rutas de las categorias conun grupo mediante prefijos 
grupo de rutas  

*/

Route::prefix('categorias')->group(function(){
    Route::get('/',[CategoriaController::class,'index'])->name('categorias.index');
    Route::get('/agregar',[CategoriaController::class,'create'])->name('categorias.create');
    Route::get('/editar/{id}',[CategoriaController::class,'edit'])->name('categorias.edit');
    Route::get('/eliminar/{id}',[CategoriaController::class,'show'])->name('categorias.show');
    Route::post('/guardar',[CategoriaController::class,'store'])->name('categorias.store');
    Route::put('/actualizar/{id}',[CategoriaController::class,'update'])->name('categorias.update');
    Route::delete('/destruir/{id}',[CategoriaController::class,'destroy'])->name('categorias.destroy');
}); 


Route::prefix('contactos')->group(function(){
    Route::get('/',[ContactosController::class,'index'])->name('contactos.index');
    Route::get('/agregar',[ContactosController::class,'create'])->name('contactos.create');
    Route::get('/editar/{id}',[ContactosController::class,'edit'])->name('contactos.edit');
    Route::get('/eliminar/{id}',[ContactosController::class,'show'])->name('contactos.show');
    Route::post('/guardar',[ContactosController::class,'store'])->name('contactos.store');
    Route::put('/actualizar/{id}',[ContactosController::class,'update'])->name('contactos.update');
    Route::delete('/destruir/{id}',[ContactosController::class,'destroy'])->name('contactos.destroy');
});
