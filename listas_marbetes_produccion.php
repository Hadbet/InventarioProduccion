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
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="all2">
                                                    <label class="custom-control-label" for="all2"></label>
                                                </div>
                                            </td>
                                            <th>ID</th>
                                            <th>User</th>
                                            <th>Company</th>
                                            <th>Contact</th>
                                            <th class="w-25">Bio</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="2474">
                                                    <label class="custom-control-label" for="2474"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md">
                                                    <img src="./assets/avatars/face-3.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>Brown, Asher D.</strong></p>
                                                <small class="mb-0 text-muted">2474</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted">Accumsan Consulting</p>
                                                <small class="mb-0 text-muted">Ap #331-7123 Lobortis Avenue</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><a href="#" class="text-muted">(958) 421-0798</a></p>
                                                <small class="mb-0 text-muted">Nigeria</small>
                                            </td>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="2474">
                                                    <label class="custom-control-label" for="2474"></label>
                                                </div>
                                            </td>
                                            <td class="text-muted">13/09/2020</td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="2786">
                                                    <label class="custom-control-label" for="2786"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md">
                                                    <img src="./assets/avatars/face-1.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>Leblanc, Yoshio V.</strong></p>
                                                <small class="mb-0 text-muted">2786</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted">Fringilla Ornare Placerat Consulting</p>
                                                <small class="mb-0 text-muted">287-8300 Nisl. St</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><a href="#" class="text-muted">(899) 881-3833</a></p>
                                                <small class="mb-0 text-muted">Papua New Guinea</small>
                                            </td>
                                            <td class="w-25"><small class="text-muted"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</small></td>
                                            <td class="text-muted">04/05/2019</td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="2747">
                                                    <label class="custom-control-label" for="2747"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md">
                                                    <img src="./assets/avatars/face-2.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>Hester, Nissim L.</strong></p>
                                                <small class="mb-0 text-muted">2747</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted">Tristique Ltd</p>
                                                <small class="mb-0 text-muted">4577 Cras St.</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><a href="#" class="text-muted">(977) 220-6518</a></p>
                                                <small class="mb-0 text-muted">Central African Republic</small>
                                            </td>
                                            <td class="w-25"><small class="text-muted"> Non tellus orci ac auctor augue. Elit at imperdiet dui accumsan sit.</small></td>
                                            <td class="text-muted">21/08/2019</td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="2639">
                                                    <label class="custom-control-label" for="2639"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md">
                                                    <img src="./assets/avatars/face-4.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>Gardner, Leigh S.</strong></p>
                                                <small class="mb-0 text-muted">2639</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted">Orci Luctus Et Inc.</p>
                                                <small class="mb-0 text-muted">P.O. Box 228, 7512 Lectus Ave</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><a href="#" class="text-muted">(537) 315-1481</a></p>
                                                <small class="mb-0 text-muted">United Kingdom</small>
                                            </td>
                                            <td class="w-25"><small class="text-muted"> Nunc pulvinar sapien et ligula ullamcorper malesuada proin. Neque convallis a cras semper auctor</small></td>
                                            <td class="text-muted">04/08/2019</td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="2238">
                                                    <label class="custom-control-label" for="2238"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md">
                                                    <img src="./assets/avatars/face-5.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>Higgins, Uriah L.</strong></p>
                                                <small class="mb-0 text-muted">2238</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted">Sit Amet Lorem Industries</p>
                                                <small class="mb-0 text-muted">Ap #377-5357 Sed Road</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><a href="#" class="text-muted">(238) 386-0247</a></p>
                                                <small class="mb-0 text-muted">Canada</small>
                                            </td>
                                            <td class="w-25"><small class="text-muted"> Libero id faucibus nisl tincidunt eget. Leo a diam sollicitudin tempor id. </small></td>
                                            <td class="text-muted">26/07/2020</td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="2152">
                                                    <label class="custom-control-label" for="2152"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md">
                                                    <img src="./assets/avatars/face-6.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>Wheeler, Ralph F.</strong></p>
                                                <small class="mb-0 text-muted">2152</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted">Suspendisse LLC</p>
                                                <small class="mb-0 text-muted">Ap #410-5363 Non, Avenue</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><a href="#" class="text-muted">(587) 675-3258</a></p>
                                                <small class="mb-0 text-muted">Chad</small>
                                            </td>
                                            <td class="w-25"><small class="text-muted"> Libero id faucibus nisl tincidunt eget. Leo a diam sollicitudin tempor id. </small></td>
                                            <td class="text-muted">11/09/2019</td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="2488">
                                                    <label class="custom-control-label" for="2488"></label>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="avatar avatar-md">
                                                    <img src="./assets/avatars/face-7.jpg" alt="..." class="avatar-img rounded-circle">
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><strong>Kelley, Sonya Y.</strong></p>
                                                <small class="mb-0 text-muted">2488</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted">Dolor Incorporated</p>
                                                <small class="mb-0 text-muted">8250 Molestie St.</small>
                                            </td>
                                            <td>
                                                <p class="mb-0 text-muted"><a href="#" class="text-muted">(934) 582-9495</a></p>
                                                <small class="mb-0 text-muted">British Indian Ocean Territory</small>
                                            </td>
                                            <td class="w-25"><small class="text-muted"> A lacus vestibulum sed arcu non odio euismod lacinia. In tellus integer feugiat scelerisque.</small></td>
                                            <td class="text-muted">30/03/2021</td>
                                            <td><button class="btn btn-sm dropdown-toggle more-horizontal" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="text-muted sr-only">Action</span>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Remove</a>
                                                    <a class="dropdown-item" href="#">Assign</a>
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