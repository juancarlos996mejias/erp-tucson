@extends('adminlte::page')

@section('title', 'NUEVO')

@section('content_header')




@stop

@section('content')
<br><br>
<div class="alert alert-danger" role="alert">
  Estas seguro de ELIMINAR este registro?
</div>

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
@end push
@stop