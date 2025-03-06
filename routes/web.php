<?php

use App\Http\Controllers\Alquileres;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Personas;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\Usuarios;
use App\Http\Controllers\Ventas;
use App\Models\Alquiler;
use App\Models\User;
use Illuminate\Support\Facades\Route;


// poner estas rutas url por orden
//1
Route::get('/crear-tipoper', [AuthController::class, 'crearTipopersona']);   
//2
Route::get('/crear-est', [AuthController::class, 'crearEst']);
//3
Route::get('/crear-persona', [AuthController::class, 'crearPersona']);   
//4
Route::get('/crear-admin', [AuthController::class, 'crearAdmin']);




Route::get('/',[AuthController::class, 'index'])->name('login');//nuestro único login
Route::post('/logear',[AuthController::class, 'logear'])->name('logear');



Route::middleware("auth")->group(function(){
    Route::get('/home', [Dashboard::class, 'index'])->name('home');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});


Route::prefix('personas')->group(function(){
    Route::get('/',[Personas::class,'index'])->name('personas');
    Route::get('/create',[Personas::class,'create'])->name('personas.create');
    Route::post('/store', [Personas::class, 'store'])->name('personas.store');
    Route::get('/show/{id}', [Personas::class, 'show'])->name('personas.show');
    Route::delete('/destroy/{id}', [Personas::class, 'destroy'])->name('personas.destroy');
    Route::get('/edit/{id}', [Personas::class, 'edit'])->name('personas.edit');
    Route::put('/update/{id}', [Personas::class, 'update'])->name('personas.update');
});

Route::prefix('contratos')->group(function(){
    Route::get('/alquileres',[Alquileres::class,'index'])->name('contratos-alquiler');
    Route::get('/ventas',[Ventas::class,'index'])->name('contratos-ventas');
});

Route::prefix('seguridad')->group(function(){
    Route::get('/',[UsuarioController::class,'index'])->name('seguridad-usuario');
});
