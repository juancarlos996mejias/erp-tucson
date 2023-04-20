<!DOCTYPE html>
<html lang="es">

<head>
    <?php include(app_path() . "/../resources/views/template/head.php"); ?>
    <script type="text/javascript" src="js/inventario.js"></script>
</head>

<body>

    <header>
        <?php include(app_path() . "/../resources/views/template/header.php"); ?>
    </header>

    <div class="container py-5">
        <div class="row">
            <div class="refine-datatable">
                <div class="container-square" style="border: 30px;">
                    <div class="refine-group">
                        <div style="display:inline">

                        </div>

                        <br>
                        <div class="d-flex justify-content-around">
                            <div class="row">
                                <div class="col-3">

                                    <select class="form-select form-select-sm " aria-label=".form-select-sm example" style="width:60% " id="almacen_filter">
                                        <option value='1'>Mi Profile</option>
                                        <option value='2'>Logout</option>
                                    </select>


                                </div>
                                <div class="col-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width:60%" id="superrubro_filter">
                                        <option value='1'>Mi Profile</option>
                                        <option value='2'>Logout</option>
                                    </select>

                                </div>

                                <div class="col-3">

                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width:60%" id="rubro_filter">
                                        <option value='1'>Mi Profile</option>
                                        <option value='2'>Logout</option>
                                    </select>

                                </div>

                                <div class="col-3">
                                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="width:60%" id="marca_filter">
                                        <option value='1'>Mi Profile</option>
                                        <option value='2'>Logout</option>
                                    </select>


                                </div>



                                <div class="refine-datatable">
                                    <div class="container-square" style="margin:20px;border: 20px;">
                                        <div class="refine-group">
                                            <div style="display:inline">
                                                <br>




                                            </div>
                                        </div>
                                    </div>
                                    <table id="inventario_table" style="width:100%">
                                        <thead>
                                            <tr class="text-bg-dark p-3">
                                                <th>Código </th>
                                                <th>Artículo</th>
                                                <th>Marca</th>
                                                <th>Super Rubro</th>
                                                <th>Rubro</th>
                                                <th>Lote</th>
                                                <th>Stock Total</th>
                                                <th>Cantidad</th>
                                                <th>QR</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                        </tbody>
                                    </table>
                                    <div id="qrcode"></div>
                                </div>
                            </div>

                        </div>
                    </div>






</body>

</html>


<script>
    $(document).ready(function() {
        $('#inventario_table').DataTable({
            "ajax": {
                "url": "env",
                "dataSrc": ""
            },
            "columns": [{
                    "data": "ID"
                },
                {
                    "data": "Codigo"
                },
                {
                    "data": "Articulos"
                },
                {
                    "data": "Marca"
                },
                {
                    "data": "Super Rubro"
                },
                {
                    "data": "Rubro"
                },
                {
                    "data": "Lote"
                },
                {
                    "data": "Stock Total"
                },
                {
                    "data": "Almacen Talar"
                },
                {
                    "data": "Almacen Outlet"
                },
                {
                    "data": "Almacen Quilmes"
                },
                {
                    "data": "Almacen MercadoLibre Ideko"
                },
                {
                    "data": "Almacen MercadoLibre Tucson"
                },
                {
                    "data": "Almacen Tigre"
                },
                {
                    "data": "Almacen Bariloche"
                },
                {
                    "data": "Local Pilar exhibiciones/muestras"
                },
                {
                    "data": "Local ShowRoom Quilmes"
                },
                {
                    "data": "Local ShowRoom Talar"
                },
                {
                    "data": "Local ShowRoom outlet"
                },
                {
                    "data": "Diferencia Ciclico"
                },
                {
                    "data": "Almacen Mar. Venta"
                },
                {
                    "data": "Mercaderia P/Devolver al Prov"
                },
                {
                    "data": "Almacen Mar. Deposito"
                },
                {
                    "data": "Stock Defectuoso/Fallas"
                },
                {
                    "data": "Almacen Mar. Fabrica"
                },
                {
                    "data": "Almacen Externo Intralog"
                },
                {
                    "data": "Almacen Externo Intralog TML"
                },
                {
                    "data": "Almacen Externo Intralog EE UU"
                },
                {
                    "data": "Almacen Externo Mepano"
                },
                {
                    "data": "Almacen Externo Paso de los Libres"
                },
            ]
        });
    });
</script>

</body>

</html>