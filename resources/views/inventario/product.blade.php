@extends('adminlte::page')

@section('title', 'PRODUCTOS')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">


@endsection

@section('content_header')



@stop

@section('content')
<br>
<br>
<div>
    <a href="./createProducto"><button type="button" class="btn btn-primary btn-md">
            <span class="fa fa-plus"></span> Agregar Producto</button></a>
</div>


<div class="card mt-2">
    <div class="card-body">
        <table class="table table-striped" id="productos">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Código</th>
                    <th>Articulo</th>
                    <th>Marca</th>
                    <th>Rubro</th>
                    <th>Lote</th>
                    <th>Stock</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>
@endsection




@section('js')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>



<script>
    $('#productos').DataTable({
        "ajax": "{{route('inventario.productos')}}",

        columns: [

            {
                data: 'id'
            },
            {
                data: 'codigo'
            },
            {
                data: 'articulo'
            },
            {
                data: 'lote'
            },
            {
                data: 'marca'
            },
            {
                data: 'rubro'
            },
            {
                data: 'stock'
            },
            {
                "defaultContent": '<button class="btn btn-warning btn-md"><span class="fas fa-user-edit"></span></button>'
            },
            {
                "defaultContent": '<button class="btn btn-danger btn-md"><span class="fa fa-trash can"></span></button>'
            },



        ],

    })
</script>
@endsection