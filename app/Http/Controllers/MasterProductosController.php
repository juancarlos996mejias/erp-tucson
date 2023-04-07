<?php

namespace App\Http\Controllers;

use App\Models\MasterProductos;
use Illuminate\Http\Request;

class MasterProductosController extends Controller
{

    public function index()
    {
        //pagina de inicio
        
    }

    public function create()
    {
        //formulario donde vamos a crear datos
        return "agregar";
    }

    public function store(Request $request)
    {
        //guardar datos en la bd
    }

    public function show(MasterProductos $masterProductos)
    {
        //para obtener registros de tablas
    }

    public function edit(MasterProductos $masterProductos)
    {
        //srirve para traer datos que se van a editar y colocarlos en una vista
        return ('actualizar');
    }

    public function update(Request $request, MasterProductos $masterProductos)
    {
        //actualiza datos en la bd
        return ('');
    }

    public function destroy(MasterProductos $masterProductos)
    {
        //elimina registro

    }
}
