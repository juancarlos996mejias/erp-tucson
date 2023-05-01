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
  <p class="text-center">Agregar Articulos</p>
  
    <p class="card-text">
    <form action="#">
      <label for="">Código</label>
      <input type="text" name="código" class="form-control" required>
      <label for="">Articulo</label>
      <input type="text" name="código" class="form-control" required>
      <label for="">Lote</label>
      <input type="text" name="código" class="form-control" required>
      <label for="">Cantidad/m2</label>
      <input type="text" name="código" class="form-control" required>
      <br>


      <a href="{{route('homeController.menuPrincipal')}}"><button class="btn btn-primary" id="nuevoProducto">
            <i class="fa-regular fa-floppy-disk"></i>
            <p>Regresar</p>
          </button></a>

 
      
        <a href="./nuevoProducto"><button class="btn btn-dark" id="nuevoProducto">
            <i class="fa-regular fa-floppy-disk"></i>
            <p>Guardar</p>
          </button></a>
      

    </form>
    </p>

<div class="table table-responsive">
  <table class="table table-sm table-bordered">
    <thead>
      <th>Código</th>
      <th>Articulo</th>
      <th>Lote</th>
      <th>Cantidad</th>

      
    </thead>
    <tbody>
    @foreach ($datos as $item)

      <tr>
        <td>{{ $item->codigo}}</td>
        <td>{{ $item->articulo}}</td>
        <td>{{ $item->lote}}</td>
        <td>{{ $item->cantidad}}</td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>


  </div>
</div>







<!--div class="row" style="heightx:400px"-->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')



@stop