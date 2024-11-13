<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/images/iconoarriba.png"/>
    <title>GRAMMER INVENTARIO</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
    <!-- CSS -->
    <link rel="stylesheet" href="lib/sweetalert2.css">
    <!-- JavaScript -->
    <script src="lib/sweetalert2.all.min.js"></script>

    <style>
        .image-container {
            display: flex;
            justify-content: space-around;
        }

        .image-container img {
            transition: all 0.3s ease;
            width: 100px;
            height: 100px;
        }

        .image-container img:hover {
            transform: translateY(-10px);
        }

        .image-container img.active {
            transform: scale(1.2);
        }

        .image-container img.inactive {
            transform: scale(0.8);
        }

        #divCurso {
            opacity: 0;
            transition: opacity 2s;
        }

        .image-zoom {
            transform: scale(1.1);
            transition: transform .2s; /* Animación */
        }
    </style>

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
                            <button class="btn btn-success text-white" onclick="verificacionRegistro()">Buscar</button>
                    </div>
                    <!-- .row -->
                    <div class="my-5 p-5">
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
        </div> <!-- .container-fluid -->
    </main> <!-- main -->
</div> <!-- .wrapper -->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/moment.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/simplebar.min.js"></script>
<script src='js/daterangepicker.js'></script>
<script src='js/jquery.stickOnScroll.js'></script>
<script src="js/tinycolor-min.js"></script>
<script src="js/config.js"></script>
<script src="js/apps.js"></script>
<script src="assets/scanapp.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
        var suma = 0;
        while (table.rows.length > 1) {
            table.deleteRow(1);
        }

        $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaVerificacion.php?marbete='+document.getElementById("txtBuscar").value, function (data) {
            for (var i = 0; i < data.data.length; i++) {
                var row = table.insertRow(-1);
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                var cell3 = row.insertCell(2);
                cell1.innerHTML = data.data[i].StorageUnit;
                cell2.innerHTML = data.data[i].NumeroParte;
                cell3.innerHTML = data.data[i].Cantidad;

                if (i==0){
                    document.getElementById("txtFolioMarbete").innerText = data.data[i].StorageUnit;
                    document.getElementById("txtConteo").innerText = data.data[i].Conteo;
                    document.getElementById("txtResponsable").innerText = data.data[i].Usuario;
                }
                suma += Number(data.data[i].Cantidad);
            }
            document.getElementById("txtCantidadTotal").innerText = suma;
        });
    }

</script>
</body>
</html>