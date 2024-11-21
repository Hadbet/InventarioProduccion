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
                    <div class="row">
                        <!-- Small table -->
                        <div class="col-md-12 my-4">
                            <h2 class="h4 mb-1">Customize table rendering</h2>
                            <p class="mb-3">Additional table rendering with vertical border, rich content formatting for cell</p>
                            <div class="card shadow">
                                <div class="card-body">
                                    <div class="toolbar">
                                        <form class="form">
                                            <div class="form-row">
                                                <div class="form-group col-auto mr-auto">
                                                    <label class="my-1 mr-2 sr-only" for="inlineFormCustomSelectPref1">Show</label>
                                                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelectPref1">
                                                        <option value="">...</option>
                                                        <option value="1">12</option>
                                                        <option value="2" selected>32</option>
                                                        <option value="3">64</option>
                                                        <option value="3">128</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-auto">
                                                    <label for="search" class="sr-only">Search</label>
                                                    <input type="text" class="form-control" id="search1" value="" placeholder="Search">
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- table -->
                                    <table class="table table-borderless table-hover">
                                        <thead>
                                        <tr>
                                            <th>Capturista</th>
                                            <th>Marbete</th>
                                            <th>Numero Parte</th>
                                            <th>Primer Conteo</th>
                                            <th>Segundo Conteo</th>
                                            <th>Storage bin</th>
                                            <th class="w-25">Monto</th>
                                            <th>Validador</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="col-auto">
                                                    <a href="profile-posts.html" class="avatar avatar-md">
                                                        <img src="https://grammermx.com/Fotos/00001606.png" alt="..." class="avatar-img rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="col ml-n2">
                                                    <strong class="mb-1" id="lblNombre">Hadbet</strong>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>300</strong></p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>14078546</strong></p>
                                                <small class="mb-0 text-muted">Cover shotrt</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>30</strong></p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>30</strong></p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>PVB_003</strong></p>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>30</strong></p>
                                                <small class="mb-0 text-muted">Pesos</small>
                                            </td>
                                            <td>
                                                <div class="col-auto">
                                                    <a href="profile-posts.html" class="avatar avatar-md">
                                                        <img src="https://grammermx.com/Fotos/00001606.png" alt="..." class="avatar-img rounded-circle">
                                                    </a>
                                                </div>
                                                <div class="col ml-n2">
                                                    <strong class="mb-1" id="lblNombre">Hadbet</strong>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <nav aria-label="Table Paging" class="mb-0 text-muted">
                                        <ul class="pagination justify-content-center mb-0">
                                            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> <!-- customized table -->
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
    <script>
              $.ajax({
                url: 'https://grammermx.com/Logistica/Inventario/dao/consultaCapturista.php', // Reemplaza esto con la URL de tus datos
                dataType: 'json',
                success: function(data) {
                  $('#dataTable-1').DataTable({
                    data: data.data,
                    columns: [
                      { data: 'FolioMarbete' },
                      { data: 'Numero_Parte' },
                        { data: 'Fecha' },
                      { data: 'Usuario' },
                        { data: 'BOTON' }
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

      function detallesRegistro(folio,comentarios,usuario,fecha) {

          document.getElementById("txtFolioMarbete").innerText = folio;
          document.getElementById("txtComentario").value = comentarios;
          document.getElementById("txtResponsable").value = usuario;
          document.getElementById("lblFecha").innerText = fecha;

          var table = document.getElementById("data-table");

          while (table.rows.length > 1) {
              table.deleteRow(1);
          }

          $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaDetalles.php?marbete='+folio, function (data) {
              for (var i = 0; i < data.data.length; i++) {
                  var row = table.insertRow(-1);
                  var cell1 = row.insertCell(0);
                  var cell2 = row.insertCell(1);
                  var cell3 = row.insertCell(2);
                  cell1.innerHTML = data.data[i].Id_StorageUnit;
                  cell2.innerHTML = data.data[i].Numero_Parte;
                  cell3.innerHTML = data.data[i].Cantidad;
              }
              document.getElementById("btnModal").click();
          });
      }

    </script>
  </body>
</html>