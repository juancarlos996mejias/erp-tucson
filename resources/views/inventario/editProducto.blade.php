<h1>aqui se edita productos</h1>

@extends('adminlte::page')

@section('title', 'NUEVO')

@section('content_header')




@stop

@section('content')
<br>
<br>
<div class="card">
  <h5 class="card-header bg-primary">
    <div class="iconUsuario">
      <img src="./img/add-button.png">

    </div>
  </h5>
  <div class="card-body">
    <p class="text-center">Actualizar Articulos</p>

    <p class="card-text">
    <form action="#">
      <label for="">Código</label>
      <input type="text" name="codigo" class="form-control" required>
      <label for="">Articulo</label>
      <input type="text" name="materno" class="form-control" required>
      <label for="">Lote</label>
      <input type="text" name="lote" class="form-control" required>
      <label for="">Almacen</label>
      <input type="text" name="almacen" class="form-control" required>
      <label for="">Cantidad/m2</label>
      <input type="text" name="cantidad" class="form-control" required>
      <br>

      


      <a href="{{route('inventario.product')}}"class="btn btn-info" id="nuevoProducto">
          <p>Regresar</p>
        </button></a>

      <button class="btn btn-warning" id="nuevoProducto">
        <p>Actualizar</p>
      </button></a>

     


     





    </form>
    </p>





    <!--div class="row" style="heightx:400px"-->
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">

    @stop

    @section('js')



    @stop