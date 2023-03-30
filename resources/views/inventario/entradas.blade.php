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
        <a href="./nuevoProducto"><button class="btn btn-success"><i class="fa-solid fa-plus"></i>
            <p>Ingresar Articulo</p>
        </button></a>
    </div>


    <div class="container py-5">

        <table class="table table-striped table-hover" id="datatableNew" style="width:100%">
            <thead>
                <tr class="table-dark">
                    <th scope="col">Código</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio Compra</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Sub Total</th>
                    <th scope="col">img Articulo</th>
                    <th scope="col">Acciones</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">000001</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000</td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/alberdi.webp"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>

                </tr>
                <tr>
                    <th scope="row">000002</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-red.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000003</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-red.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000004</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/black.webp"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000005</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/murano1.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000006</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/piazza-bacha.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000001</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-verde.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000001</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000</td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/alberdi.webp"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000002</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-red.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000003</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-red.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000004</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/black.webp"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000005</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/murano1.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000006</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/piazza-bacha.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000001</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-verde.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000001</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000</td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/alberdi.webp"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000002</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-red.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000003</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-red.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000004</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/black.webp"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000005</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/murano1.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000006</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/piazza-bacha.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000001</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-verde.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000001</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000</td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/alberdi.webp"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000002</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-red.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000003</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-red.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000004</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/black.webp"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000005</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/murano1.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000006</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/piazza-bacha.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>
                <tr>
                    <th scope="row">000001</th>
                    <td>Rosseto 57x57</td>
                    <td>24JK</td>
                    <td>420.000<img class="imagen" src=""></td>
                    <td>280.000</td>
                    <td><img class="imagen" src="./img/ceramicos/klaukol-verde.jpg"></td>
                    <th scope="col"><button type="button" class="btn btn-warning"><i class="fa-solid fa-pen"></i></button>
                    </th>
                    <th scope="col"><button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                    </th>
                </tr>


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