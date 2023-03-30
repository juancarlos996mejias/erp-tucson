<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\productosController;
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

Route::get('inventario/productos',[productosController::class,'productos']);

Route::resource('inventario/productos',productosController::class);





Route::get('/login', function () {
    return view('registro.login');
});

Route::get('/menuPrincipal', function () {
    return view('menu.menuPrincipal');
});


//Inicio de Rutas de modulo de inventario

Route::get('/inventarioNew', function () {
    return view('inventario.inventarioNew');
});


Route::get('/menu_inventario', function () {
    return view('menu_inventario');
});

Route::get('/toma_inventario', function () {
    return view('/toma_inventario');
});

Route::get('/logistica_movimientos', function () {
    return view('/logistica_movimientos');
});

Route::get('/productos', function () {
    return view('/inventario.productos');
});

Route::get('/usuarios', function () {
    return view('usuarios');
});

Route::get('/ventas', function () {
    return view('ventas');
});



//inventario_Entradas

Route::get('/entradas', function () {
    return view('inventario.entradas');
});

Route::get('/nuevoProducto', function () {
    return view('inventario.nuevoProducto');
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


Route::get('/register', function () {
    return view('registro.register');
});





// Fin de Rutas de modulo de inventario