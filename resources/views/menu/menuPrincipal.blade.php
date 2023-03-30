@extends('adminlte::page')

@section('title', 'MENU')

@section('content_header')

<div class="iconPrincipal">
  <img src="./img/aplicacion.png">
  <p>Menu Principal</p>
</div>
@stop

@section('content')



<div class=" container justify-content-center" id="contenedorPrincipal">

  <a href="./usuarios">
    <div class="col mt-4">
      <div class="card " style="max-width: 20rem;" id="principal">
        <div class="card-header" id="headerUsuario">USUARIOS</div>
        <div class="card-body" id="bodyUsuario">
          <i class="fa fa-users"></i>
        </div>
  </a>
</div>

<a href="./ventas">
  <div class="card " style="max-width: 20rem;" id="principal">
    <div class="card-header" id="headerVentas">VENTAS</div>
    <div class="card-body" id="bodyVentas">
      <i class="fa fa-credit-card"></i>
    </div>
  </div>
</a>

<a href="./inventarioNew">
  <div class="card " style="max-width: 20rem;" id="principal">
    <div class="card-header" id="headerInventario">INVENTARIO</div>
    <div class="card-body" id="bodyInventario">
      <i class="fa fa-boxes"></i>
    </div>
  </div>
  </div>
</a>

<a href="./menu_inventario">
  <div class="col mt-4">
    <div class="card " style="max-width: 20rem;" id="principal">
      <div class="card-header" id="headerLogistica">LOGISTICA</div>
      <div class="card-body" id="bodyLogistica">
        <i class="fa fa-truck fast"></i>
      </div>
    </div>
</a>

<a href="./menu_inventario">
  <div class="card " style="max-width: 20rem;" id="principal">
    <div class="card-header" id="headerOperaciones">OPERACIONES</div>
    <div class="card-body" id="bodyOperaciones">
      <i class="fa fa-network-wired"></i>
    </div>
  </div>
</a>

<a href="./dashboard">
  <div class="card " style="max-width: 20rem;" id="principal">
    <div class="card-header" id="headerDashboard">DASHBOARD</div>
    <div class="card-body" id="bodyDashboard">
      <i class="fa fa-chart-line"></i>
    </div>
  </div>
</a>
</div>
</div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop