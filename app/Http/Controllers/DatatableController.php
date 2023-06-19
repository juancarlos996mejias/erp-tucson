<?php

namespace App\Http\Controllers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\productos;
use Datatable;

class DatatableController extends Controller
{
    public function productos(){

        $productos = Productos::select('id','codigo','articulo','lote','marca','rubro','stock','acciones')->get();
        return datatables()->of($productos)->toJson();
        
    }
}
