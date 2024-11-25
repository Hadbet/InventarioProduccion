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
    <link rel="stylesheet" href="css/dataTables.bootstrap4.css">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="css/daterangepicker.css">
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
        <div class="container-fluid" id="inicioAux">
          <div class="row">

              <div class="col-6">
                  <div class="card shadow mb-4">
                      <div class="card-header">
                          <strong class="card-title" id="tituloP">Ubicaciones Produccion</strong>
                      </div>
                      <div class="card-body">
                          <div class="row">

                              <div class="col-md-4">
                                  <div class="form-group mb-3">
                                      <label for="txtGrammerNoU">Grammer No</label>
                                      <input type="text" class="form-control drgpicker" id="txtGrammerNoU"
                                             value="" aria-describedby="button-addon2">
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group mb-2">
                                      <label for="txtPvbU">PVB</label>
                                      <input type="text" class="form-control drgpicker" id="txtPvbU"
                                             value="" aria-describedby="button-addon2">
                                  </div>
                              </div>

                          </div>
                      </div>
                      <div class="card-footer">
                          <button type="button" onclick="enviarDatosP(1);" class="btn mb-2 mr-2 btn-success float-right text-white">Registrar<span
                                      class="fe fe-send fe-16 ml-2"></span></button>
                          <button type="button" onclick="enviarDatosP(2);" class="btn mb-2 btn-info float-right text-white">Actualizar<span
                                      class="fe fe-send fe-16 ml-2"></span></button>
                      </div>
                  </div> <!-- / .card -->
              </div>


              <div class="col-6">
                  <div class="card shadow mb-4">
                      <div class="card-header">
                          <strong class="card-title" id="tituloP">Bines</strong>
                      </div>
                      <div class="card-body">
                          <div class="row">

                              <div class="col-md-4">
                                  <div class="form-group mb-3">
                                      <label for="txtBinB">StBin</label>
                                      <input type="text" class="form-control drgpicker" id="txtBinB"
                                             value="" aria-describedby="button-addon2">
                                  </div>
                              </div>

                              <div class="col-md-4">
                                  <div class="form-group mb-2">
                                      <label for="txtStTypeB">StType</label>
                                      <input type="text" class="form-control drgpicker" id="txtStTypeB"
                                             value="" aria-describedby="button-addon2">
                                  </div>
                              </div>

                          </div>
                      </div>
                      <div class="card-footer">
                          <button type="button" onclick="enviarDatosB(1);" class="btn mb-2 mr-2 btn-success float-right text-white">Agregar<span
                                      class="fe fe-send fe-16 ml-2"></span></button>
                          <button type="button" onclick="enviarDatosB(2);" class="btn mb-2 btn-info float-right text-white">Actualizar<span
                                      class="fe fe-send fe-16 ml-2"></span></button>
                      </div>
                  </div> <!-- / .card -->
              </div>


            <div class="col-6">
              <h2 class="mb-2 page-title">Listas de Ubicaciones PVB</h2>
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">
                      <!-- table -->
                      <table class="table datatables" id="dataTable-1">
                        <thead>
                          <tr>
                              <th>Grammer No</th>
                              <th>Nombre</th>
                              <th>Modificar</th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div> <!-- simple table -->
              </div> <!-- end section -->
            </div> <!-- .col-12 -->

              <div class="col-6">
                  <h2 class="mb-2 page-title">Listas de Bines</h2>
                  <div class="row my-4">
                      <!-- Small table -->
                      <div class="col-md-12">
                          <div class="card shadow">
                              <div class="card-body">
                                  <!-- table -->
                                  <table class="table datatables" id="dataTable-2">
                                      <thead>
                                      <tr>
                                          <th>StBin</th>
                                          <th>StType</th>
                                          <th>Modificar</th>
                                      </tr>
                                      </thead>
                                      <tbody>

                                      </tbody>
                                  </table>

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
    <script>

              $.ajax({
                url: 'https://grammermx.com/Logistica/Inventario/dao/consultaUbicacionAdmin.php', // Reemplaza esto con la URL de tus datos
                dataType: 'json',
                success: function(data) {
                  $('#dataTable-1').DataTable({
                    data: data.data,
                    columns: [
                      { data: 'GrammerNo' },
                      { data: 'PVB' },
                        { data: 'Boton' }
                    ],
                    autoWidth: true,
                    "lengthMenu": [
                      [16, 32, 64, -1],
                      [16, 32, 64, "All"]
                    ]
                  });
                }
              });


              $.ajax({
                  url: 'https://grammermx.com/Logistica/Inventario/dao/consultaBinAdmin.php', // Reemplaza esto con la URL de tus datos
                  dataType: 'json',
                  success: function(data) {
                      $('#dataTable-2').DataTable({
                          data: data.data,
                          columns: [
                              { data: 'StBin' },
                              { data: 'StType' },
                              { data: 'Boton' }
                          ],
                          autoWidth: true,
                          "lengthMenu": [
                              [16, 32, 64, -1],
                              [16, 32, 64, "All"]
                          ]
                      });
                  }
              });

    </script>
    <script src="js/apps.js"></script>
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

      function actualizarTabla() {
          $.ajax({
              url: 'https://grammermx.com/Logistica/Inventario/dao/consultaUbicacionAdmin.php', // Reemplaza esto con la URL de tus datos
              dataType: 'json',
              success: function(data) {
                  var table = $('#dataTable-1').DataTable();
                  table.clear();
                  table.rows.add(data.data);
                  table.draw();
              }
          });
      }

      function actualizarTablaDos() {
          $.ajax({
              url: 'https://grammermx.com/Logistica/Inventario/dao/consultaBinAdmin.php', // Reemplaza esto con la URL de tus datos
              dataType: 'json',
              success: function(data) {
                  var tableDos = $('#dataTable-2').DataTable();
                  tableDos.clear();
                  tableDos.rows.add(data.data);
                  tableDos.draw();
              }
          });
      }

      function enviarDatosP(tipo) {
          var grammerNo = document.getElementById("txtGrammerNoU").value;
          var pvb = document.getElementById("txtPvbU").value;

          var formData = new FormData();
          formData.append('grammerNo', grammerNo);
          formData.append('pvb', pvb);
          formData.append('tipo', tipo);

          fetch('https://grammermx.com/Logistica/Inventario/dao/guardarUbicacionP.php', {
              method: 'POST',
              body: formData
          })
              .then(response => response.json())
              .then(data => {
                  console.log(data);
                  actualizarTabla();
                  document.getElementById("txtGrammerNoU").value = "";
                  document.getElementById('txtGrammerNoU').disabled = false;
                  document.getElementById("txtPvbU").value = "";
                  Swal.fire({
                      title: "Listo modifico el PVB",
                      text: data.message,
                      icon: "success"
                  });
              });
      }

      function enviarDatosB(tipo) {
          var bin = document.getElementById("txtBinB").value;
          var type = document.getElementById("txtStTypeB").value;

          var formData = new FormData();
          formData.append('stBin', bin);
          formData.append('stType', type);
          formData.append('tipo', tipo);

          fetch('https://grammermx.com/Logistica/Inventario/dao/guardarBinP.php', {
              method: 'POST',
              body: formData
          })
              .then(response => response.json())
              .then(data => {
                  console.log(data);
                  actualizarTablaDos();
                  document.getElementById("txtBinB").value = "";
                  document.getElementById('txtBinB').disabled = false;
                  document.getElementById("txtStTypeB").value = "";
                  Swal.fire({
                      title: "Listo modifico el Bin",
                      text: data.message,
                      icon: "success"
                  });
              });
      }

      function llenarPVB(grammerNo,pvb) {
          document.getElementById("txtGrammerNoU").value = grammerNo;
          document.getElementById('txtGrammerNoU').disabled = true;
          document.getElementById("txtPvbU").value = pvb;
          document.getElementById("inicioAux").scrollIntoView({behavior: "smooth"});
      }

      function llenarBin(bin,type) {
          document.getElementById("txtBinB").value = bin;
          document.getElementById('txtBinB').disabled = true;
          document.getElementById("txtStTypeB").value = type;
          document.getElementById("inicioAux").scrollIntoView({behavior: "smooth"});
      }

    </script>
  </body>
</html>