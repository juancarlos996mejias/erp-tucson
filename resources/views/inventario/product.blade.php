@extends('adminlte::page')

@section('title', 'PRODUCTOS')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>








@endsection

@section('content_header')



@stop

@section('content')
<br>
<br>
<div>
    <a href="./createProducto" data-toggle="modal" data-target="#modalCrear"><button type="button" class="btn btn-primary btn-md">
            <span class="fa fa-plus"></span> Agregar Producto</button></a>

</div>
<!-- Modal -->

<div class="card mt-2">
    <div class="card-body">
        <table class="table table-striped" id="productos">
            <thead>

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



<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalEdit">
    Launch demo modal
</button>
<!-- Modal -->
<div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><img src="./img/logoBlue.png" style="height: 30px;"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <h5 class="card-header bg-primary">
                        <div class="text-center iconUsuario">
                            <img src="./img/pencil.png" style="height: 30px;">
                            <div class="text-center">
                                <p>Editar Articulos</p>
                            </div>

                        </div>
                    </h5>
                    <div class="card-body">


                        <p class="card-text">
                        <form action="#">
                            <label for="">Código</label>
                            <input type="text" name="codigo" class="form-control" required>
                            <label for="">Articulo</label>
                            <input type="text" name="articulo" class="form-control" required>
                            <label for="">Marca</label>
                            <input type="text" name="marca" class="form-control" required>
                            <label for="">Rubro</label>
                            <input type="text" name="rubro" class="form-control" required>
                            <label for="">Lote</label>
                            <input type="text" name="lote" class="form-control" required>
                            <label for="">Stock</label>
                            <input type="text" name="stock" class="form-control" required>
                            <br>


                        </form>
                        </p>
                    </div>
                    <div class="modal-footer">
                        <a href="{{route('inventario.product')}}" class="btn btn-primary" id="nuevoProducto">
                            <span class="fas fa-undo-alt"></span> Regresar
                            </button></a>

                        <button class="btn btn-warning" id="nuevoProducto">
                            <span class="fas fa-user-edit"></span> Actualizar
                        </button></a>
                    </div>
                </div>
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
                        "defaultContent": '<a href=""data-bs-toggle="modalEdit" data-bs-target="#modalEdit" class="btn btn-warning btn-md"><span class="fas fa-user-edit"></span></a>'
                    },
                    {
                        "defaultContent": '<button class="btn btn-danger btn-md"><span class="fa fa-trash can"></span></button>'
                    },



                ],

            })
        </script>
        @endsection