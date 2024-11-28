<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>GRAMMER INVENTARIO</title>

    <?php include 'estaticos/stylesEstandar.php'; ?>

    <!-- JavaScript -->
    <script src="lib/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="css/generales.css">

</head>
<body class="vertical  light  ">
<div class="wrapper">

    <?php
            require_once('estaticos/navegador.php');
    ?>

    <main role="main" class="main-content">
        <center><img src="images/tituloInventario.png" style="width: 50%"></center>

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="w-50 mx-auto text-center justify-content-center py-5 my-5">
                        <h2 class="page-title mb-0">Ingresa o escanea el marbete</h2>
                        <p class="lead text-muted mb-4">Si lo vas a ingresar manual recuerda que es marbete.conteo.</p>
                            <input class="form-control form-control-lg bg-white rounded-pill pl-5" type="search" id="txtBuscar" placeholder="Search" aria-label="Search">
                            <p class="help-text mt-2 text-muted">Ejemplo 185.1 o 185.2 o 185.3.</p>
                            <br>
                            <button class="btn btn-success text-white" onclick="verificacionRegistro()" >Buscar</button>
                    </div>
                    <!-- .row -->
                    <div class="my-5 p-5" id="divMarbete" style="display: none">
                        <div class="text-center">
                            <h2 class="mb-0">Marbete : <span id="txtFolioMarbete"></span></h2>
                            <p class="lead text-muted mb-5">Conteo : <span id="txtConteo"></span></p>
                            <p class="lead text-muted mb-5">Responsable : <span id="txtResponsable"></span></p>
                        </div>

                        <table id="data-table" class="table table-hover">
                            <thead>
                            <tr>
                                <th>Storage Unit</th>
                                <th>Numero Parte</th>
                                <th>Cantidad</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <h2 class="mb-0">Cantidad Total : <span id="txtCantidadTotal"></span></h2>
                        </div>
                    </div>
                </div> <!-- .col-12 -->
            </div> <!-- .row -->

            <div class="row">

                <div class="col-md-6 col-xl-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <span class="card-title">Marbete : <span id="lblFolio"></span></span>
                            <a class="float-right small text-muted" href="#!"><i class="fe fe-more-vertical fe-12"></i></a>
                        </div>
                        <div class="card-body my-n2">
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <span class="card-title">Numero de parte</span>
                                    <h4 class="mb-0" id="lblNumeroParte"></h4>
                                </div>
                                <div class="flex-fill text-right">
                                    <p class="mb-0 small" id="lblCosto"></p>
                                    <p class="text-muted mb-0 small">Pesos</p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <span class="card-title">Cantidad</span>
                                    <h4 class="mb-0" id="lblCantidad"> <span id="lblUm"></span></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <span class="card-title">Descripcion</span>
                                    <h4 class="mb-0" id="lblDescripcion"></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <span class="card-title">Storage Bin</span>
                                    <h4 class="mb-0" id="lblStorageBin"></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <span class="card-title">Monto Total</span>
                                    <h4 class="mb-0" id="lblMontoTotal"></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <a href="profile-posts.html" class="avatar avatar-md">
                                        <img id="imagenCapturador" alt="..." class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <strong class="mb-1" id="lblNombreCapturador"></strong><span class="dot dot-lg bg-success ml-1"></span>
                                    <p class="small text-muted mb-1" id="lblRol">Capturista</p>
                                </div>
                            </div>
                            <hr>
                            <button id="btnFin" class="btn mb-2 btn-success float-right text-white" onclick="enviarDatos()">Finalizar Captura<span
                                        class="fe fe-chevron-right fe-16 ml-2" ></span></button>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div> <!-- .col -->

                <div class="col-md-6 col-xl-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <span class="card-title">Marbete : <span id="lblFolio"></span></span>
                            <a class="float-right small text-muted" href="#!"><i class="fe fe-more-vertical fe-12"></i></a>
                        </div>
                        <div class="card-body my-n2">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <a href="profile-posts.html" class="avatar avatar-md">
                                        <img id="imagenCapturador" alt="..." class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <strong class="mb-1" id="lblNombreCapturador"></strong><span class="dot dot-lg bg-success ml-1"></span>
                                    <p class="small text-muted mb-1" id="lblRol">Verificador</p>
                                </div>
                            </div>
                            <hr>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div> <!-- .col -->

            </div>


        </div> <!-- .container-fluid -->
    </main> <!-- main -->
</div> <!-- .wrapper -->

<?php include 'estaticos/scriptEstandar.php'; ?>

<script src="js/apps.js"></script>
<script src="assets/scanapp.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>

<script>

    function verificacionRegistro() {
        /*
        document.getElementById("txtFolioMarbete").innerText = folio;
        document.getElementById("txtComentario").value = comentarios;
        document.getElementById("txtResponsable").value = usuario;
        document.getElementById("lblFecha").innerText = fecha;*/

        var table = document.getElementById("data-table");
        while (table.rows.length > 1) {
            table.deleteRow(1);
        }

        $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaVerificacion.php?marbete='+document.getElementById("txtBuscar").value, function (data) {
            for (var i = 0; i < data.data.length; i++) {
                var row = table.insertRow(-1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                cell1.innerHTML = data.data[i].Id_StorageUnit;
                cell2.innerHTML = data.data[i].NumeroParte;
                cell3.innerHTML = data.data[i].Cantidad;

                if (i==0){
                    document.getElementById("txtFolioMarbete").innerText = data.data[i].FolioMarbete;
                    document.getElementById("txtConteo").innerText = data.data[i].Conteo;
                    document.getElementById("txtResponsable").innerText = data.data[i].Usuario;
                }
            }
            document.getElementById("txtCantidadTotal").innerText = data.data[0].PrimerConteo;
            document.getElementById("divMarbete").style.display='block';
            document.getElementById("divMarbete").scrollIntoView({behavior: "smooth"});

        });
    }

</script>
</body>
</html>