@extends('adminlte::page')

@section('title', 'PRODUCTOS')

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
@endsection

@section('content_header')

<div class="iconPrincipal">
    <img src="#">
    <p>Productos</p>
</div>
@stop

@section('content')
<div class="card">
<div class="card-body">
<table class="table table-striped" id="tableProducto">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Articulo</th>
            <th scope="col">Marca</th>
            <th scope="col">Rubro</th>
            <th scope="col">Lote</th>
            <th scope="col">Stock</th>
            <th scope="col">img Articulo</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
        </tr>
    </thead>


   
</table>
</div>
</div>
@endsection




@section('js')

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/responsive.bootstrap4.min.js"></script>
<script>
    $(document).ready(function () {
    $('#tableProducto').DataTable({
        ajax: '../ajax/data/arrays.txt',
        responsive: true,
        autoWidth:false,
        "language": {
               "lengthMenu": "mostrar" +
                              <select class="custon-select custom-select-sm form-control-sm">
                              <option value = '10'>10</option>
                              <option value = '25'>25</option>
                              <option value = '50'>50</option>
                              <option value = '100'>100</option>
                              <option value = '-1'>All</option>
                              </select> +
            "Registros por pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina_PAGE_ de _PAGES_",
            "infoEmpty": "No hay registros disponibles",
            "infoFiltered": "(Filtrado de _MAX_ Registros totales)",
            'search':'Buscar',
            'paginate': {
            'next':'Siguiente',
            'previous': 'Anterior'
        
            }
        }
    }
    
        
    );
});
</script>
@endsection