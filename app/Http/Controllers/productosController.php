<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;



class productosController extends Controller{

    
    public function productos()
    {
        $productos = productos::all();
            return view('inventario.productos',compact('productos'));
        }
       
}






