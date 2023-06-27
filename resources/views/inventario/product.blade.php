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
    <a href="./createProducto"><button type="button" class="btn btn-primary btn-lg">
        <span class="fa fa-plus"></span>   Agregar Producto</button></a>
</div>


<div class="card mt-2">
<div class="card-body">
<table class="table table-striped" id="productos">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Código</th>
            <th scope="col">Articulo</th>
            <th scope="col">Lote</th>
            <th scope="col">Marca</th>
            <th scope="col">Rubro</th>
            <th scope="col">Stock</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
           
            
            
            
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
           "ajax":  "{{route('inventario.productos')}}",
            "columns": [
                {data:'id'},
                {data:'codigo'},
                {data:'articulo'},
                {data:'lote'},
                {data:'marca'},
                {data:'rubro'},
                {data:'stock'},
                {"defaultContent":'<button class="btn btn-warning btn-lg"><span class="fas fa-user-edit"></span></button>'},
                {"defaultContent":'<button class="btn btn-danger btn-lg"><span class="fa fa-trash can"></span></button>'},
                    
                
                  
            ],
         
      
    })
  

</script>
@endsection