<?php

session_start();
$rol =$_SESSION['rol'];
$area =$_SESSION['area'];
$areaNombre =$_SESSION['AreaNombre'];
$bin =$_SESSION['StBin'];
$nombre =$_SESSION['nombre'];


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

    <link rel="stylesheet" href="css/generales.css">
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
                    <h2 class="mb-2 page-title">Lista general</h2>
                    <p class="card-text">Aqui encontraras los marbetes asignados a tu area de trabajo</p>
                    <div class="row my-4">
                        <!-- Small table -->
                        <div class="col-md-12">
                            <div class="card shadow">
                                <div class="card-body">
                                    <!-- table -->
                                    <table class="table datatables" id="dataTable-1">
                                        <thead>
                                        <tr>
                                            <th>Folio</th>
                                            <th>Numero de Parte</th>
                                            <th>Primer Conteo</th>
                                            <th>Segundo Conteo</th>
                                            <th>Tercer Conteo</th>
                                            <th>Comentario</th>
                                            <th>StorageBin</th>
                                            <th>StorageType</th>
                                            <th>Usuario</th>
                                            <th>Estatus</th>
                                        </tr>
                                        </thead>
                                        <tfoot>
                                        <tr>
                                            <th>Folio</th>
                                            <th>Numero de Parte</th>
                                            <th>Primer Conteo</th>
                                            <th>Segundo Conteo</th>
                                            <th>Tercer Conteo</th>
                                            <th>Comentario</th>
                                            <th>StorageBin</th>
                                            <th>StorageType</th>
                                            <th>Usuario</th>
                                            <th>Estatus</th>
                                        </tr>
                                        </tfoot>
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
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/buttons.print.min.js"></script>

<script>
    $.ajax({
        url: 'https://grammermx.com/Logistica/Inventario/dao/consultaLideres.php?area=<?php echo $area;?>', // Reemplaza esto con la URL de tus datos
        dataType: 'json',
        success: function(data) {
            var table = $('#dataTable-1').DataTable({
                data: data.data,
                columns: [
                    { data: 'FolioMarbete' },
                    { data: 'NumeroParte' },
                    { data: 'PrimerConteo' },
                    { data: 'SegundoConteo' },
                    { data: 'TercerConteo' },
                    { data: 'Comentario' },
                    { data: 'StorageBin' },
                    { data: 'StorageType' },
                    { data: 'Usuario' },
                    { data: 'Estatus' }
                ],
                autoWidth: true,
                "lengthMenu": [
                    [16, 32, 64, -1],
                    [16, 32, 64, "All"]
                ],
                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copy',
                        className: 'btn btn-sm copyButton'
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-sm csvButton'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-sm excelButton'
                    },
                    {
                        extend: 'pdf',
                        className: 'btn btn-sm pdfButton'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-sm printButton'
                    }
                ],
                initComplete: function () {
                    this.api().columns().every( function () {
                        var column = this;
                        var input = document.createElement("input");
                        input.className = 'form-control form-control-sm';
                        $(input).appendTo($(column.footer()).empty())
                            .on('keyup change clear', function () {
                                if (column.search() !== this.value) {
                                    column.search(this.value).draw();
                                }
                            });
                    });
                }
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

    function verFormato(curso,horario,fecha) {
        var link = "https://grammermx.com/RH/Cursos/pruebaPDF.php?curso="+curso+"&horario="+horario+"&fecha="+fecha;
        window.open(link, '_blank');
    }
</script>
</body>
</html>