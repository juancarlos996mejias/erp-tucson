<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductController extends Controller
{
        public function inventarioNew (){
                return view('inventario.inventarioNew');
               } 

               //public function inventory (){
               // return view('inventario.inventory');
              // } 
    
        public function product (){
         return view('inventario.product');
        } 

        public function createProducto(){
        return view('inventario.createProducto');
        }

        public function store(request $request){
                $productos = new productos();
                $productos->codigo = $request->post('codigo');
                $productos->articulo = $request->post('articulo');
                $productos->lote = $request->post('lote');
                $productos->almacen = $request->post('almacen');
                $productos->Cantidad = $request->post('cantidad');
                $productos->save();

                return redirect()->route("inventario.product")->with("success","Agregado con exito!");


                }
     
        public function editProducto (){
        return view('inventario.EditProducto');
        } 

        public function deleteProducto (){
                return view('inventario.deleteProducto');
                } 
       
}
