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
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
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


        <div class="row">


        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="h2 mb-0" id="lblDinero"></span>
                            <p class="small text-muted mb-0">de diferencia de costo</p>
                            <span class="badge badge-pill badge-success"></span>
                        </div>
                        <div class="col-auto">
                            <span class="fe fe-32 fe-shopping-bag text-muted mb-0"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 mb-4">
            <div class="card shadow">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col">
                            <span class="h2 mb-0" id="lblCantidad"></span>
                            <p class="small text-muted mb-0">de diferencia de coteo</p>
                            <span class="badge badge-pill badge-success"></span>
                        </div>
                        <div class="col-auto">
                            <span class="fe fe-32 fe-shopping-bag text-muted mb-0"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        </div>


        <div class="container-fluid">

            <div class="row align-items-center my-4">
                <div class="col">
                    <h2 class="h3 mb-0 page-title">Control de conteos</h2>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-primary"><span class="fe fe-filter fe-12 mr-2"></span>Pasar a segundos conteos</button>
                </div>
            </div>

            <table class="table datatables" id="dataTable-1">
                <thead>
                <tr>
                    <th>Marbete</th>
                    <th>Numero Parte</th>
                    <th>Storage Bin</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>


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
<script src='js/jquery.dataTables.min.js'></script>
<script src='js/dataTables.bootstrap4.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>

<script>
    verificacionDiferencia();
    function verificacionDiferencia() {

        $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaSegundosConteosCosto.php?area='+2, function (data) {
            for (var i = 0; i < data.data.length; i++) {
                document.getElementById("lblDinero").innerText = data.data[i].CostoTotalInventarioSap - data.data[i].CostoTotalPrimerConteoBitacora;
                document.getElementById("lblCantidad").innerText = data.data[i].TotalInventarioSap-data.data[i].TotalPrimerConteoBitacora;
                crearTabla();
            }

        });
    }

    function crearTabla() {
        $.ajax({
            url: 'https://grammermx.com/Logistica/Inventario/dao/consultaSegundosConteos.php?area='+2, // Reemplaza esto con la URL de tus datos
            dataType: 'json',
            success: function(data) {
                $('#dataTable-1').DataTable({
                    data: data.data,
                    columns: [
                        { data: 'FolioMarbete' },
                        { data: 'NumeroParte' },
                        { data: 'StorageBin' }
                    ],
                    autoWidth: true,
                    "lengthMenu": [
                        [16, 32, 64, -1],
                        [16, 32, 64, "All"]
                    ]
                });
            }
        });
    }

</script>
</body>
</html>