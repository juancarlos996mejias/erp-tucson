@extends('adminlte::page')

@section('title', 'MENU')

@section('content_header')

<div class="iconPrincipal">
    <img src="./img/aplicacion.png">
    <p>Menu Principal</p>
</div>
@stop

@section('content')



<div class=" container justify-content-center" id="inventario2">



    <a href="./product"id="#mi-modalEntrada">
        <div class="col mt-4">
            <div class="card " style="max-width: 20rem;" id="principal">
                <div class="card-header" id="header2">ENTRADAS</div>
                <div class="card-body" id="body2">
                    <img src="./img/freeEntrada.png" class="card-img-top2" />
                </div>
    </a>
    <div class="card-footer" id="footer2">
        <p class="fuente">Nuevo, Listar, Buscar</p>
    </div>
</div>



<button class="btn btn-dark" id="power" data-bs-toggle="modal" data-bs-target="#mi-modalEntrada"><i class="fa-solid fa-right-to-bracket"></i></button>

<a href="./ventas">
    <div class="card " style="max-width: 20rem;" id="principal">
        <div class="card-header" id="header2">SALIDAS</div>
        <div class="card-body" id="body2">
            <img src="./img/freeSalida.png" class="card-img-top2" />
        </div>
</a>
<div class="card-footer" id="footer2">
    <p class="fuente">Nuevo, Listar, Buscar</p>
</div>
</div>

<br>

<a href="./product">
    <div class="card " style="max-width: 20rem;" id="principal">
        <div class="card-header" id="header2">PRODUCTOS</div>
        <div class="card-body" id="body2">
            <img src="./img/productosfree.png" class="card-img-top2" />
        </div>
</a>
<div class="card-footer" id="footer2">
<p class="fuente">Listar</p>
</div>
</div>
</div>



<a href="./menu_inventario">
    <div class="col mt-4">
        <div class="card " style="max-width: 20rem;" id="principal">
            <div class="card-header" id="header2">TOMA DE INVENTARIO</div>
            <div class="card-body" id="body2">
                <img src="./img/freeAlmacen.png" class="card-img-top2" />
            </div>
</a>
<div class="card-footer" id="footer2">
    <p class="fuente">Nuevo, Listar, Buscar</p>
</div>
</div>



<a href="./menu_inventario">
    <div class="col mt-4">
        <div class="card " style="max-width: 20rem;" id="principal">
            <div class="card-header" id="header2">MOVIMIENTOS</div>
            <div class="card-body" id="body2">
                <img src="./img/movimientosfree.png" class="card-img-top2" />
            </div>
</a>
<div class="card-footer" id="footer2">
    <p class="fuente">Nuevo, Listar, Buscar</p>
</div>
</div>



<a href="./dashboard">
    <div class="col mt-4">
        <div class="card " style="max-width: 20rem;" id="principal">
            <div class="card-header" id="header2">CONFIGURACION</div>
            <div class="card-body" id="body2">
                <img src="./img/freeConfiguracion.png" class="card-img-top2" />
            </div>
</a>
<div class="card-footer" id="footer2">
    <p class="fuente">Nuevo, Listar, Buscar</p>
</div>
</div>


</div>


-------modal-------------

<div class="modal fade" id="mi-modalEntrada" data-bs-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content" id="modalContent">

                <div class="modal-header" id="modalHeader">
                    <h5 class="modal-title">Opciones</h5>
                    <button class="btn-close" data-bs-dismiss="modal" type="button"></button>
                </div>

                <div class="modal-body" id="modalBody">
                <a href="./salidasNuevo"><button type="button" class="btn" data-bs-dismiss="modal">Historial</button></a>
                <a href="./createProducto"><button type="button" class="btn" data-bs-dismiss="modal">Crear</button></a>
                <a href="./entradasListar"><button type="button" class="btn">Listar </button></a>
                </div>
                <div class="modal-footer" id="modalFooter">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
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