<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    
        public function product (){
         return view('inventario.product');
        } 

        public function createProducto(){
        return view('inventario.createProducto');
        }
     
        public function editProducto (){
        return view('inventario.EditProducto');
        } 

        public function deleteProducto (){
                return view('inventario.deleteProducto');
                } 
       
}
