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
                    <h2 class="mb-2 page-title">Lista de facturas pendientes por revisar</h2>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table datatables" id="dataTable-1">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Folio 45</th>
                                            <th>Factura</th>
                                            <th>Documento</th>
                                            <th>Fecha</th>
                                            <th>Usuario</th>
                                            <th>Estatus</th>
                                            <th>Aprobo</th>
                                            <th>Comentarios</th>
                                            <th>Folio Were</th>
                                            <th>Fecha Aprobación</th>
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

<div class="modal fade modal-right modal-slide" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="defaultModalLabel">Gracias por confirma llena los siguientes datos.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form action="dao/daoActualizarWere.php" method="post" enctype="multipart/form-data">
                    <input style="display: none" type="text" name="txtFolioModal" class="form-control drgpicker" id="txtFolioModal"
                           value="" aria-describedby="button-addon2">

                    <input style="display: none" type="text" name="txtNombreAprobador" class="form-control drgpicker" id="txtNombreAprobador"
                           value="Jesus" aria-describedby="button-addon2">

                    <input style="display: none" type="text" name="txtEstatus" class="form-control drgpicker" id="txtEstatus"
                           value="" aria-describedby="button-addon2">

                    <label for="txtFolioWere" id="lblTituloModal">Folio were</label>
                    <input type="text" name="txtFolioWere" class="form-control" id="txtFolioWere"
                           value="" aria-describedby="button-addon2">
                    <br>
                    <!-- Botón para enviar el formulario -->
                    <button type="submit" id="btnEnviarNuevos" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

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
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

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


</script>
</body>
</html>