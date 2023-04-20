<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;



class productosController extends Controller{

    
    public function productos()
    {
        $productos= productos::get();
        
            return $productos;
        }
       
}
