<?php

namespace App\Http\Controllers;

use App\Models\inventory;
use Illuminate\Http\Request;

class inventoryController extends Controller
{
   
    public function inventory (){
        $datos = inventory::all();
        return view('inventario.entradas', compact('datos'));
       } 

   
  
    //
}
?>