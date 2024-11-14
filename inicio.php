<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>GRAMMER RH</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="css/simplebar.css">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="shortcut icon" href="assets/images/iconoarriba.png"/>
    <link rel="stylesheet" href="css/feather.css">
    <link rel="stylesheet" href="css/select2.css">
    <link rel="stylesheet" href="css/dropzone.css">
    <link rel="stylesheet" href="css/uppy.min.css">
    <link rel="stylesheet" href="css/jquery.steps.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/quill.snow.css">
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
                    <div class="row align-items-center mb-2">
                        <div class="col">
                            <h2 class="h5 page-title">Bienvenido al sistema integral de RH</h2>
                        </div>
                        <div class="col-auto">
                            <form class="form-inline">
                                <div class="form-group">
                                    <button type="button" class="btn btn-sm"><span
                                            class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="mb-2 align-items-center">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="row mt-1 align-items-center">
                                    <div class="col-12 col-lg-4 text-left pl-4">
                                        <span class="h3">Proceso</span>
                                    </div>
                                </div>
                                <div class="map-box">
                                    <div id="areaChartTres"></div>
                                </div>

                                <div class="row mt-1 align-items-center">
                                    <div class="col-12 col-lg-4 text-left pl-4">
                                        <span class="h3">Ausentismos por APU</span>
                                    </div>
                                </div>

                                <div class="map-box">
                                    <div id="areaChartApu"></div>
                                </div>

                            </div> <!-- .card-body -->
                        </div> <!-- .card -->
                    </div>


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
<script src="js/d3.min.js"></script>
<script src="js/topojson.min.js"></script>
<script src="js/datamaps.all.min.js"></script>
<script src="js/datamaps-zoomto.js"></script>
<script src="js/datamaps.custom.js"></script>
<script src="js/Chart.min.js"></script>
<script>
    /* defind global options */
    Chart.defaults.global.defaultFontFamily = base.defaultFontFamily;
    Chart.defaults.global.defaultFontColor = colors.mutedColor;
</script>
<script src="js/gauge.min.js"></script>
<script src="js/jquery.sparkline.min.js"></script>
<script src="js/apexcharts.min.js"></script>
<script src="js/apexcharts.custom.js"></script>
<script src='js/jquery.mask.min.js'></script>
<script src='js/select2.min.js'></script>
<script src='js/jquery.steps.min.js'></script>
<script src='js/jquery.validate.min.js'></script>
<script src='js/jquery.timepicker.js'></script>
<script src='js/dropzone.min.js'></script>
<script src='js/uppy.min.js'></script>
<script src='js/quill.min.js'></script>
<script src="js/apps.js"></script>

<script>


    Apu();
    function Apu() {
        $.getJSON('https://grammermx.com/Logistica/Inventario/dao/graficaGeneral.php', function (data) {
            var AreaNombre = [];
            var PrimerConteo = [];
            var SegundoConteo = [];
            var Estandar = [];

            for (var i = 0; i < data.data.length; i++) {
                AreaNombre.push(data.data[i].AreaNombre ? data.data[i].AreaNombre : '');
                PrimerConteo.push(data.data[i].PorcentajePrimerConteo ? data.data[i].PorcentajePrimerConteo : 0);
                SegundoConteo.push(data.data[i].PorcentajeSegundoConteo ? data.data[i].PorcentajeSegundoConteo : 0);
                Estandar.push("100");
            }

            console.log(AreaNombre);
            console.log(PrimerConteo);
            console.log(SegundoConteo);
            graficaAusentismosApu(AreaNombre,PrimerConteo,SegundoConteo,Estandar);
        });
    }

    function graficaAusentismosApu(AreaNombre,PrimerConteo,SegundoConteo,Estandar) {
        var options = {
            series: [{
                name: 'Primer Conteo',
                type: 'column',
                data: PrimerConteo
            }, {
                name: 'Segundo Conteo',
                type: 'column',
                data: SegundoConteo
            }, {
                name: 'Estandar',
                type: 'line',
                data: Estandar
            }],
            chart: {
                height: 350,
                type: 'line',
            },
            stroke: {
                width: [0, 4]
            },
            title: {
                text: 'Traffic Sources'
            },
            dataLabels: {
                enabled: true,
                enabledOnSeries: [1]
            },
            labels: AreaNombre,
            yaxis: [{
                title: {
                    text: 'Website Blog',
                },

            }, {
                opposite: true,
                title: {
                    text: 'Social Media'
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#areaChartTres"), options);
        chart.render();
    }


</script>

</body>
</html>