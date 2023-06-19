<?php

use Illuminate\Support\Facades\Route;
use app\http\controller\admin\homeController;
use App\Http\Controllers\ArticulosController;
use App\Models\Articulos;

route::get('admin',[homeController::class,'index']);

route::get('admin',[ArticulosController::class,'entradasListar']);







