<?php

use App\Http\Controllers\ArticulosController;
use App\Http\Controllers\DatatableController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\MasterProductosController;
use App\Http\Controllers\productController;
use App\Http\Controllers\productosController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;



Route::get('/register',[RegisterController::class,'show']);

Route::post('/register', [RegisterController::class, 'register']); 


Route::get('/login',[LoginController::class,'show']);

Route::post('/login',[LoginController::class,'login']);








//route create

//route edit
Route::get('/edit',[MasterProductosController::class,'edit'])->name('masterProductos.edit');
//route update
Route::get('/update',[MasterProductosController::class,'update'])->name('masterProductos.update');

Route::get('/createProducto',[ArticulosController::class,'create'])->name('articulos.createProducto');

Route::get('/entradasListar',[ArticulosController::class,'listar'])->name('articulos.entradasListar');





Route::get('/',[HomeController::class,'index'])->name('homeController.index');
// menu principal
Route::get('/menu',[homeController::class,'menu'])->name('homeController.menuPrincipal');

Route::get('/productos',[DatatableController::class,'productos'])->name('inventario.productos');

Route::get('/product',[ProductController::class,'product'])->name('inventario.product'); 

Route::get('/inventarioNew',[ProductController::class,'inventarioNew'])->name('inventario.inventarioNew'); 

//Route::get('/inventory',[ProductController::class,'inventory'])->name('inventario.inventory'); 

Route::get('/createProducto',[ProductController::class,'createProducto'])->name('inventario.createProducto');

//Route::post('/store',[ProductController::class,'store'])->name('inventario.store');

Route::get('/editProducto',[ProductController::class,'editProducto'])->name('inventario.editProducto');

Route::get('/deleteProducto',[ProductController::class,'deleteProducto'])->name('inventario.deleteProducto');


Route::get('/login', function () {
    return view('registro.login');
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

Route::get('/entradas', function () {
    return view('inventario.entradas');
});

Route::get('/nuevoProducto', function () {
    return view('inventario.nuevoProducto');
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