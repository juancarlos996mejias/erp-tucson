<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\homeController;
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


Route::get('/', function () {
    return view('home.index');
});



Route::get('/register',[RegisterController::class,'show']);

Route::post('/register', [RegisterController::class, 'register']); 


Route::get('/login',[LoginController::class,'show']);

Route::post('/login',[LoginController::class,'login']);

Route::get('/home',[homeController::class,'index']);

Route::get('/menu',[homeController::class,'menuPrincipal']);





Route::get('/login', function () {
    return view('registro.login');
});

Route::get('/menuPrincipal', function () {
    return view('menu.menuPrincipal');
});


//Inicio de Rutas de modulo de inventario

Route::get('/menu_inventario', function () {
    return view('menu_inventario');
});

Route::get('/toma_inventario', function () {
    return view('/toma_inventario');
});

Route::get('/logistica_movimientos', function () {
    return view('/logistica_movimientos');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/ventas', function () {
    return view('ventas');
});



//inventario_Entradas

Route::get('/entradasNuevo', function () {
    return view('inventario.entradasNuevo');
});

Route::get('/entradasListar', function () {
    return view('inventario.entradasListar');
});

Route::get('/entradasBuscar', function () {
    return view('inventario.entradasBuscar');
});


//inventario_salidas

Route::get('/salidasNuevo', function () {
    return view('inventario.salidasNuevo');
});

Route::get('/salidasListar', function () {
    return view('inventario.salidasListar');
});

Route::get('/salidasBuscar', function () {
    return view('inventario.salidasBuscar');
});



Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/inventarioNew', function () {
    return view('inventarioNew');
});



Route::get('/register', function () {
    return view('registro.register');
});





// Fin de Rutas de modulo de inventario