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
      <img src="./img/delete.png">
      <div><p>Eliminar Artículo</p></div>

    </div>
  </h5>
  <div class="card-body">
    

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
      <span class="fas fa-undo-alt"></span>  Regresar
        </button></a>

      <button class="btn btn-danger" id="nuevoProducto">
        <span class="fa fa fa-trash"></span>   Eliminar
      </button></a>


      














<!--div class="row" style="heightx:400px"-->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<script src="sweetalert2.all.min.js"></script>



@push ('js')
<script src="sweetalert2.all.min.js"></script>

<script>
  Swal.fire({
    title: 'Estas seguro de Eliminar?',
    text: "No podrás revertir esto!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Si, Eliminar esto!'
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    }
  })
</script>

@stop