@extends('adminlte::page')

@section('title', 'MENU')

@section('content_header')

@stop

@section('content')
<br>

<style>
    img {

        vertical-align: middle;
        border-style: none;
        height: 30px;
        width: 40px;


    }
</style>
<div class="card">
    <div class="card-header bg-primary">
        <h3 class="card-title">Listar Entradas</h3>
        <div class="card-tools">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <span class="badge badge-secondary"><i class="fa fa-list"></i></span>
        </div>
        <!-- /.card-tools -->
    </div>
    <!-- /.card-header -->
    <div class="card-body">

        <label>Fecha Inicio</label>
        <div class="input-group mb-3">
            <span class="input-group" id="basic-addon1"></span>
            <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <label>Fecha Final</label>
        <div class="input-group mb-3">
            <span class="input-group" id="basic-addon1"></span>
            <input type="date" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="col-4">
            <button type="button" class="btn btn-secondary">Buscar</button>
        </div>
        <br>
        <label>Fecha de Registro</label>
        <div class="input-group mb-3">
            <span class="input-group" id="basic-addon1"></span>
            <input type="date" class="form-control" placeholder="Fecha de Registro" aria-label="Username" aria-describedby="basic-addon1">
        </div>

        <div class="col-2">
            <button type="button" class="btn btn-danger">Eliminar</button>
        </div>

        <div class="d-flex justify-content-end">
            <div class="col-2">
                <div class="d-flex">
                    <button type="button" class="btn btn-success">Descargar <img src="../img/excel.png" id="excel"></button>
                </div>
            </div>

        </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
    </div>

</div>



<table id="datatableNew mt-3" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Fecha de Registro</th>
                <th>N° de Documento</th>
                <th>Usuario Registrado</th>
                <th>Provedor</th>
                <th>Monto Total</th>
                <th>Código de Producto</th>
                <th>Código de Producto</th>
                <th>Código de Producto</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011-04-25</td>
                <td>$320,800</td>
                <td>$320,800</td>
                <td>$320,800</td>
            </tr>
        </tbody>
    </table>

@stop



<!-- /.card -->


@section('css')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

<script>
    $(document).ready(function() {
        $('#datatableNew').DataTable();
    });
</script>
@stop