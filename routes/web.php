<?php

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
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/menuPrincipal', function () {
    return view('menuPrincipal');
});


//Inicio de Rutas de modulo de inventario

Route::get('/menu_inventario', function () {
    return view('menu_inventario');
});


// Fin de Rutas de modulo de inventario