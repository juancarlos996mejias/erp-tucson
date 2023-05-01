<?php

namespace App\Http\Controllers;

use App\Models\Articulos;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
   
    public function index()
    {
        //pagina de inicio
        
    }

   
    public function create()
    {
        //formulario donde agregamos datos
        $datos = Articulos::all();
        return view('inventario.createProducto',compact('datos'));
    }

   
    public function store(Request $request)
    {
        //guarda los datos en la BD
    }

    
    public function show(Articulos $articulos)
    {
        //obtiene solo 1 registro de nuestra tabla
    }

    
    public function editProducto(Articulos $articulos)
    {
        //este metodo nos sirve para traer los datos que se van a editar
        // y los coloca en un formulario.
        return 'aqui se actualiza';
    }

    
    public function update(Request $request, Articulos $articulos)
    {
        //actualiza datos en la BD
    }

    
    public function destroy(Articulos $articulos)
    {
        //elimina un registro. 
    }
}
