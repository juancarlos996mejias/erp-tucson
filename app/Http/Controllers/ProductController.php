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

        public function productos (){
$productos = productos::select('id','codigo','articulo','lote','marca','rubro','stock')->get();

                return $productos();
               } 




        public function createProducto(Request $request){
        return view('inventario.createProducto');
        }



        public function store(){
            


                }
     
        public function editProducto (){
        return view('inventario.EditProducto');
        } 

        public function deleteProducto (){
                return view('inventario.deleteProducto');
                } 
       
}
