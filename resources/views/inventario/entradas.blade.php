<!DOCTYPE html>
<html lang="es">


<head>
    <?php include(app_path() . "/../resources/views/template/head.php"); ?>
</head>



<body>
    <header>
        <?php include(app_path() . "/../resources/views/template/header.php"); ?>

    </header>





    <div class="d-flex justify-content-center mt-4">
        <a href="./createProducto"><button class="btn btn-primary" id="agregarArticulo"><i class="fa-solid fa-plus"></i>
                <p>Agregar Articulo</p>
            </button></a>
    </div>



    <div class="row justify-content-around">
        <div class="d-flex col-2">
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione Almacen</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>



        <div class="d-flex col-2">
            <select class="form-select" aria-label="Default select example">
                <option selected>Seleccione Rubro</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </div>
    </div>



    <div class="container py-5">
        <table class="table table-striped table-hover" id="datatableNew" style="width:100%">
            <thead>
                <tr class="table-dark">
                    <th scope="col">ID</th>
                    <th scope="col">Código</th>
                    <th scope="col">Articulo</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Lote</th>
                    <th scope="col">Stock</th>
                    <th scope="col">img Articulo</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>

                </tr>
            </thead>


            <tbody>
                <tr>
                    <th scope="row"></th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><img class="imagen" src="./img/ceramicos/alberdi.webp"></td>
                    <td scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button></td>
                    <td scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button></td>

                </tr>   
            </tbody>


            
        </table>

        <br>
        <br>

    </div>


    <script>
        $(document).ready(function() {
            $('#datatableNew').DataTable();
        });
    </script>

</body>

</html>

