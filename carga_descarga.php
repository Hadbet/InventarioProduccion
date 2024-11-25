<?php

session_start();
$rol =$_SESSION['rol'];
$area =$_SESSION['area'];
$areaNombre =$_SESSION['AreaNombre'];
$bin =$_SESSION['StBin'];
$nomina =$_SESSION['nomina'];
$nombre =$_SESSION['nombre'];

if (strlen($nomina) == 1) {
    $nomina = "0000000" . $nomina;
}
if (strlen($nomina) == 2) {
    $nomina = "000000" . $nomina;
}
if (strlen($nomina) == 3) {
    $nomina = "00000" . $nomina;
}
if (strlen($nomina) == 4) {
    $nomina = "0000" . $nomina;
}
if (strlen($nomina) == 5) {
    $nomina = "000" . $nomina;
}
if (strlen($nomina) == 6) {
    $nomina = "00" . $nomina;
}
if (strlen($nomina) == 7) {
    $nomina = "0" . $nomina;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>GRAMMER INVENTARIO</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">

    <link rel="shortcut icon" href="assets/images/iconoarriba.png" />
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="css/feather.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css"><!-- Tippy.js core styles -->
      <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/dist/tippy.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
      <link rel="stylesheet" href="css/styles.css">
    <!-- App CSS -->
    <link rel="stylesheet" href="css/app-light.css" id="lightTheme">
    <link rel="stylesheet" href="css/app-dark.css" id="darkTheme" disabled>
      <!-- CSS -->
      <link rel="stylesheet" href="lib/sweetalert2.css">
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
      <?php
            require_once('estaticos/navegador.php');
    ?>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">

              <h2 class="mb-2 page-title">Importar marbetes o Rellenar txt</h2>
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center">Tabla Bitacora</h2>
                        <button class="btn btn-success text-right btnExcel" id="btnExcelBitacora"> Cargar Excel Bitacora</button>
                        <input type="file" id="fileInputBitacora" accept=".xlsx, .xls" style="display: none;" />
                        <button class="btn btn-secondary text-right btnExcel" id="tooltipBitacora"><i class="far fa-question-circle position-absolute"></i>? Ejemplo excel</button>

                        <button class="btn btn-primary text-right btnExcel" id="btnTxtBitacora"> Actualizar txt </button>
                        <input type="file" id="fileInputTxt" accept=".txt" style="display: none;" />
                        <br><br>
                      <!-- table -->
                      <table class="table datatables" id="tablaBitacora">
                        <thead>
                        <tr>
                            <th>Id_Bitacora</th>
                            <th>NumeroParte</th>
                            <th>FolioMarbete</th>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Estatus</th>
                            <th>PrimerConteo</th>
                            <th>SegundoConteo</th>
                            <th>TercerConteo</th>
                            <th>Comentario</th>
                            <th>StorageBin</th>
                            <th>StorageType</th>
                            <th>Area</th>
                        </tr>
                        </thead>
                          <tbody id="bodyBitacora"></tbody>
                      </table>

                        <!-- Button trigger modal -->
                        <button style="display: none" type="button" class="btn mb-2 btn-outline-success" data-toggle="modal" data-target="#verticalModal" id="btnModal"> Launch demo modal </button>
                        <!-- Modal -->
                        <div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalModalTitle">Modificación de usuarios</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Id:</label>
                                            <input type="text" class="form-control" id="txtIdM" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Usuario:</label>
                                            <input type="text" class="form-control" id="txtUsuarioM">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Password:</label>
                                            <input type="password" class="form-control" id="txtPasswordM">
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn mb-2 btn-success text-white" onclick="actualizarDatos()">Actualizar</button>
                                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal" id="btnCloseM">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                  </div>
                </div> <!-- simple table -->
              </div> <!-- end section -->
            </div> <!-- .col-12 -->
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->

      </main> <!-- main -->
    </div> <!-- .wrapper -->

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/moment.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/simplebar.min.js"></script>
    <script src='js/daterangepicker.js'></script>
    <script src='js/jquery.stickOnScroll.js'></script>
    <script src="js/tinycolor-min.js"></script>
    <script src="js/config.js"></script>
    <script src='js/jquery.dataTables.min.js'></script>
    <script src='js/dataTables.bootstrap4.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="js/apps.js"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');


    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            //cargarDatosParte();
            //cargarDatosBin();
            //cargarDatosStorage();

        });

        document.getElementById("tooltipBitacora").addEventListener("click", function() {
            mostrarImagenTooltip(
                "tooltipBitacora",
                "https://grammermx.com/excelInventario/imgs/bitacora.png",
                320,
                140
            );
        });

        document.getElementById("tooltipStorage").addEventListener("click", function() {
            mostrarImagenTooltip(
                "tooltipStorage",
                "https://grammermx.com/excelInventario/imgs/storage.png",
                320,
                100
            );
        });

        document.getElementById("tooltipArea").addEventListener("click", function() {
            mostrarImagenTooltip(
                "tooltipArea",
                "https://grammermx.com/excelInventario/imgs/area.png",
                320,
                120
            );
        });

        document.getElementById("tooltipUbicaciones").addEventListener("click", function() {
            mostrarImagenTooltip(
                "tooltipUbicaciones",
                "https://grammermx.com/excelInventario/imgs/area.png",
                320,
                120
            );
        });

        document.getElementById("tooltiInventario").addEventListener("click", function() {
            mostrarImagenTooltip(
                "tooltiInventario",
                "https://grammermx.com/excelInventario/imgs/inventarioSap.png",
                310,
                120
            );
        });

        document.getElementById("tooltiBin").addEventListener("click", function() {
            mostrarImagenTooltip(
                "tooltiBin",
                "https://grammermx.com/excelInventario/imgs/bin.png",
                250,
                120
            );
        });

        document.getElementById("tooltiParte").addEventListener("click", function() {
            mostrarImagenTooltip(
                "tooltiParte",
                "https://grammermx.com/excelInventario/imgs/parte.png",
                320,
                120
            );
        });
    </script>

    <!-- -Archivos de jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- JAVASCRIPT FILES -->
    <script src="js/excel.js"></script>
    <script src="js/archivoTexto.js"></script>

    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
  </body>
</html>