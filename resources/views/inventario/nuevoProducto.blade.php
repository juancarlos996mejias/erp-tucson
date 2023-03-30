@extends('adminlte::page')

@section('title', 'NUEVO')

@section('content_header')
<div class="iconUsuario">
  <img src="./img/dashboard.png">
  <p>Agregar Articulo</p>
</div>



@stop

@section('content')


<body>



  <div class="input-group mb-3">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-boxes"></i></span>
    <input type="text" class="form-control" placeholder="Articulos" aria-label="Username" aria-describedby="basic-addon1">
  </div>




  <div class="row mb-3">
    <div class="col">
      <input type="text" class="form-control" placeholder="Código" aria-label="First name">
    </div>

    <div class="col">
      <input type="text" class="form-control" placeholder="Lote" aria-label="Last name">
    </div>
  </div>

  <div class="row mb-3">
    <div class="col-6">
      <input type="text" class="form-control" placeholder="First name" aria-label="First name">
    </div>

    <div class="col-6">
      <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
    </div>
  </div>


  <div class="d-flex justify-content-around mt-4">
    <select class="form-select-lg">
      <option selected>Seleccione opción</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>

    <select class="form-select-lg">
      <option selected>Seleccione opción</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </div>

  



 


</body>

<div class=" d-flex justify-content-center">
    <a href="./nuevoProducto"><button class="btn btn-dark" id="nuevoProducto">
    <i class="fa-regular fa-floppy-disk"></i><p>Guardar</p>
      </button></a>
  </div>
</html>



<!--div class="row" style="heightx:400px"-->
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')



@stop