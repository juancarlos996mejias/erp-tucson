<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\models\productos;


class DatatableController extends Controller
{
    public function productos(){
        $productos = Productos::select('id','Código','Articulo','Marca','Rubro','Lote','Stock')->get();
        
        return datatables()->of(productos::all())->toJson();
    }

    
}

