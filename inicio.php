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

                    <div class="col-12 col-lg-12 text-center pl-4">
                        <span class="h3">Entramientos y cursos.</span>
                    </div>
                    <br>
                    <div class="row items-align-baseline">
                        <div class="col-md-12 col-lg-4">
                            <div class="card shadow eq-card mb-4">
                                <div class="card-body">
                                    <h2 class="h5 text-center">APU 1</h2>
                                    <div class="chart-widget mb-2">
                                        <div id="radialbarApu1"></div>
                                    </div>
                                    <div class="row items-align-center">
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Asistencias</p>
                                            <h6 class="mb-1" id="txtAsistenciasApu1">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Inasistencias</p>
                                            <h6 class="mb-1" id="txtInasistenciaApu1">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Aprobados</p>
                                            <h6 class="mb-1" id="txtAprobadosApu1">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                    </div>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col -->

                        <div class="col-md-12 col-lg-4">
                            <div class="card shadow eq-card mb-4">
                                <div class="card-body">
                                    <h2 class="h5 text-center">APU 2</h2>
                                    <div class="chart-widget mb-2">
                                        <div id="radialbarApu2"></div>
                                    </div>
                                    <div class="row items-align-center">
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Asistencias</p>
                                            <h6 class="mb-1" id="txtAsistenciasApu2">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Inasistencias</p>
                                            <h6 class="mb-1" id="txtInasistenciaApu2">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Aprobados</p>
                                            <h6 class="mb-1" id="txtAprobadosApu2">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                    </div>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col -->

                        <div class="col-md-12 col-lg-4">
                            <div class="card shadow eq-card mb-4">
                                <div class="card-body">
                                    <h2 class="h5 text-center">APU 3</h2>
                                    <div class="chart-widget mb-2">
                                        <div id="radialbarApu3"></div>
                                    </div>
                                    <div class="row items-align-center">
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Asistencias</p>
                                            <h6 class="mb-1" id="txtAsistenciasApu3">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Inasistencias</p>
                                            <h6 class="mb-1" id="txtInasistenciaApu3">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Aprobados</p>
                                            <h6 class="mb-1" id="txtAprobadosApu3">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                    </div>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col -->

                    </div> <!-- .row -->

                    <div class="col-12 col-lg-12 text-center pl-4">
                        <span class="h3">Eficiencia por Apus.</span>
                    </div>
                    <br>
                    <div class="row items-align-baseline">
                        <div class="col-md-12 col-lg-4">
                            <div class="card shadow eq-card mb-4">
                                <div class="card-body">
                                    <h2 class="h5 text-center">APU 1</h2>
                                    <div class="chart-widget mb-2">
                                        <div id="radialEfiApu1"></div>
                                    </div>
                                    <div class="row items-align-center">
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Personas</p>
                                            <h6 class="mb-1" id="txtEfiAsApu1">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Aprobados</p>
                                            <h6 class="mb-1" id="txtEfiApApu1">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Reprobados</p>
                                            <h6 class="mb-1" id="txtEfiReApu1">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                    </div>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col -->

                        <div class="col-md-12 col-lg-4">
                            <div class="card shadow eq-card mb-4">
                                <div class="card-body">
                                    <h2 class="h5 text-center">APU 2</h2>
                                    <div class="chart-widget mb-2">
                                        <div id="radialEfiApu2"></div>
                                    </div>
                                    <div class="row items-align-center">
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Personas</p>
                                            <h6 class="mb-1" id="txtEfiAsApu2">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Aprobados</p>
                                            <h6 class="mb-1" id="txtEfiApApu2">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Reprobados</p>
                                            <h6 class="mb-1" id="txtEfiReApu2">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                    </div>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col -->

                        <div class="col-md-12 col-lg-4">
                            <div class="card shadow eq-card mb-4">
                                <div class="card-body">
                                    <h2 class="h5 text-center">APU 3</h2>
                                    <div class="chart-widget mb-2">
                                        <div id="radialEfiApu3"></div>
                                    </div>
                                    <div class="row items-align-center">
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Personas</p>
                                            <h6 class="mb-1" id="txtEfiAsApu3">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Aprobados</p>
                                            <h6 class="mb-1" id="txtEfiApApu3">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="text-muted mb-1">Reprobados</p>
                                            <h6 class="mb-1" id="txtEfiReApu3">0</h6>
                                            <p class="text-muted mb-0">personas</p>
                                        </div>
                                    </div>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col -->

                    </div> <!-- .row -->


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
    asistencias();

    function asistencias() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaAsistencia.php', function (data) {

            var aEne = 0, aFeb = 0, aMar = 0, aAbril = 0, aMay = 0, aJun = 0, aJul = 0, aAgo = 0,
                aSep = 0, aOct = 0, aNov = 0, aDic = 0;

            for (var i = 0; i < data.data.length; i++) {
                if (data.data[i].Mes === '1') {
                    aEne = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '2') {
                    aFeb = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '3') {
                    aMar = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '4') {
                    aAbril = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '5') {
                    aMay = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '6') {
                    aJun = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '7') {
                    aJul = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '8') {
                    aAgo = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '9') {
                    aSep = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '10') {
                    aOct = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '11') {
                    aNov = data.data[i].Asistencias;
                }
                if (data.data[i].Mes === '12') {
                    aDic = data.data[i].Asistencias;
                }
            }
            inasistencias(aEne, aFeb, aMar, aAbril, aMay, aJun, aJul, aAgo, aSep, aOct, aNov, aDic)
        });
    }

    function inasistencias(aEne, aFeb, aMar, aAbril, aMay, aJun, aJul, aAgo, aSep, aOct, aNov, aDic) {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaInasistencia.php', function (data) {

            var iEne = 0, iFeb = 0, iMar = 0, iAbril = 0, iMay = 0, iJun = 0, iJul = 0, iAgo = 0,
                iSep = 0, iOct = 0, iNov = 0, iDic = 0;

            for (var i = 0; i < data.data.length; i++) {
                if (data.data[i].Mes === '1') {
                    iEne = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '2') {
                    iFeb = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '3') {
                    iMar = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '4') {
                    iAbril = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '5') {
                    iMay = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '6') {
                    iJun = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '7') {
                    iJul = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '8') {
                    iAgo = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '9') {
                    iSep = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '10') {
                    iOct = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '11') {
                    iNov = data.data[i].Inasistencias;
                }
                if (data.data[i].Mes === '12') {
                    iDic = data.data[i].Inasistencias;
                }
            }
            grafica(aEne, aFeb, aMar, aAbril, aMay, aJun, aJul, aAgo, aSep, aOct, aNov, aDic, iEne, iFeb, iMar, iAbril, iMay, iJun, iJul, iAgo, iSep, iOct, iNov, iDic);
        });
    }

    function grafica(aEne, aFeb, aMar, aAbril, aMay, aJun, aJul, aAgo, aSep, aOct, aNov, aDic, iEne, iFeb, iMar, iAbril, iMay, iJun, iJul, iAgo, iSep, iOct, iNov, iDic) {
        var options = {
            series: [{
                name: 'Asistencias',
                data: [aEne, aFeb, aMar, aAbril, aMay, aJun, aJul, aAgo, aSep, aOct, aNov, aDic]
            }, {
                name: 'Inasistencias',
                data: [iEne, iFeb, iMar, iAbril, iMay, iJun, iJul, iAgo, iSep, iOct, iNov, iDic]
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dic'],
            },
            yaxis: {
                title: {
                    text: 'Personas'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return " " + val + " personas"
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#areaChartDos"), options);
        chart.render();
    }

    contadores();

    function contadores() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaContadores.php', function (data) {

            for (var i = 0; i < data.data.length; i++) {
                document.getElementById("txtAsistencia").innerHTML = data.data[i].Asistencias;
                document.getElementById("txtInasistencia").innerHTML = data.data[i].Inasistencias;
                document.getElementById("txtReprobados").innerHTML = data.data[i].Reprovados;
                document.getElementById("txtAprobados").innerHTML = data.data[i].Aprovados;

            }
        });
    }
    contadoresApu();
    function contadoresApu() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaContadoresApu.php', function (data) {
            var asistenciaApu1,inasistenciaApu1,totalApu1,porcentaje;
            var asistenciaApu2,inasistenciaApu2,totalApu2,porcentaje2;
            var asistenciaApu3,inasistenciaApu3,totalApu3,porcentaje3;
            for (var i = 0; i < data.data.length; i++) {
                document.getElementById("txtAsistenciasApu1").innerHTML = data.data[i].AsistenciasApu1;
                document.getElementById("txtInasistenciaApu1").innerHTML = data.data[i].InasistenciasApu1;
                document.getElementById("txtAprobadosApu1").innerHTML = data.data[i].AprovadosApu1;

                asistenciaApu1 = Number(data.data[i].AsistenciasApu1);
                inasistenciaApu1 = Number(data.data[i].InasistenciasApu1);
                totalApu1 = asistenciaApu1 + inasistenciaApu1;

                porcentaje = Math.round((asistenciaApu1 * 100) / totalApu1);

                radioApu1(porcentaje);

                document.getElementById("txtAsistenciasApu2").innerHTML = data.data[i].AsistenciasApu2;
                document.getElementById("txtInasistenciaApu2").innerHTML = data.data[i].InasistenciasApu2;
                document.getElementById("txtAprobadosApu2").innerHTML = data.data[i].AprovadosApu2;

                asistenciaApu2 = Number(data.data[i].AsistenciasApu2);
                inasistenciaApu2 = Number(data.data[i].InasistenciasApu2);
                totalApu2 = asistenciaApu2 + inasistenciaApu2;

                porcentaje2 = Math.round((asistenciaApu2 * 100) / totalApu2);

                radioApu2(porcentaje2);

                document.getElementById("txtAsistenciasApu3").innerHTML = data.data[i].AsistenciasApu3;
                document.getElementById("txtInasistenciaApu3").innerHTML = data.data[i].InasistenciasApu3;
                document.getElementById("txtAprobadosApu3").innerHTML = data.data[i].AprovadosApu3;

                asistenciaApu3 = Number(data.data[i].AsistenciasApu3);
                inasistenciaApu3 = Number(data.data[i].InasistenciasApu3);
                totalApu3 = asistenciaApu3 + inasistenciaApu3;

                porcentaje3 = Math.round((asistenciaApu3 * 100) / totalApu3);

                radioApu3(porcentaje3);
            }
        });
    }



    function radioApu1(serie) {
        var options1 = {
            series: [serie],
            chart: {
                height: 200,
                type: 'radialBar',
            },
            theme: {
                mode: colors.chartTheme
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: "70%"
                    },
                    track: {
                        background: colors.borderColor
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            show: !0,
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        },
                        value: {
                            formatter: function (e) {
                                return parseInt(e)
                            },
                            fontSize: "1.53125rem",
                            fontWeight: 700,
                            fontFamily: base.defaultFontFamily,
                            offsetY: 5,
                            show: !0,
                            color: colors.headingColor
                        },
                        total: {
                            show: true,
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            label: "Asistio el",
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "diagonal2",
                    shadeIntensity: .2,
                    gradientFromColors: [extend.primaryColorLighter],
                    gradientToColors: [base.primaryColor],
                    inverseColors: !0,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [20, 100]
                }
            },
            stroke: {
                lineCap: "round"
            },
            labels: ['Porciento'],
        };

        var chart1 = new ApexCharts(document.querySelector("#radialbarApu1"), options1);
        chart1.render();
    }


    function radioApu2(serie) {
        var options2 = {
            series: [serie],
            chart: {
                height: 200,
                type: 'radialBar',
            },
            theme: {
                mode: colors.chartTheme
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: "70%"
                    },
                    track: {
                        background: colors.borderColor
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            show: !0,
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        },
                        value: {
                            formatter: function (e) {
                                return parseInt(e)
                            },
                            fontSize: "1.53125rem",
                            fontWeight: 700,
                            fontFamily: base.defaultFontFamily,
                            offsetY: 5,
                            show: !0,
                            color: colors.headingColor
                        },
                        total: {
                            show: true,
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            label: "Asistio el",
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "diagonal2",
                    shadeIntensity: .2,
                    gradientFromColors: [extend.primaryColorLighter],
                    gradientToColors: [base.primaryColor],
                    inverseColors: !0,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [20, 100]
                }
            },
            stroke: {
                lineCap: "round"
            },
            labels: ['Porciento'],
        };

        var chart2 = new ApexCharts(document.querySelector("#radialbarApu2"), options2);
        chart2.render();
    }

    function radioApu3(serie) {
        var options3 = {
            series: [serie],
            chart: {
                height: 200,
                type: 'radialBar',
            },
            theme: {
                mode: colors.chartTheme
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: "70%"
                    },
                    track: {
                        background: colors.borderColor
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            show: !0,
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        },
                        value: {
                            formatter: function (e) {
                                return parseInt(e)
                            },
                            fontSize: "1.53125rem",
                            fontWeight: 700,
                            fontFamily: base.defaultFontFamily,
                            offsetY: 5,
                            show: !0,
                            color: colors.headingColor
                        },
                        total: {
                            show: true,
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            label: "Asistio el",
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "diagonal2",
                    shadeIntensity: .2,
                    gradientFromColors: [extend.primaryColorLighter],
                    gradientToColors: [base.primaryColor],
                    inverseColors: !0,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [20, 100]
                }
            },
            stroke: {
                lineCap: "round"
            },
            labels: ['Porciento'],
        };

        var chart3 = new ApexCharts(document.querySelector("#radialbarApu3"), options3);
        chart3.render();
    }

    ausentismos();
    function ausentismos() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/ausentismo/consultaAusentismos.php', function (data) {

            var Ene1 = 0, Feb1 = 0, Mar1 = 0, Abril1 = 0, May1 = 0, Jun1 = 0, Jul1 = 0, Ago1 = 0,
                Sep1 = 0, Oct1 = 0, Nov1 = 0, Dic1 = 0;

            for (var i = 0; i < data.data.length; i++) {

                    if (data.data[i].Mes === '1') {
                        Ene1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '2') {
                        Feb1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '3') {
                        Mar1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '4') {
                        Abril1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '5') {
                        May1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '6') {
                        Jun1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '7') {
                        Jul1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '8') {
                        Ago1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '9') {
                        Sep1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '10') {
                        Oct1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '11') {
                        Nov1 = data.data[i].Asistencias;
                    }
                    if (data.data[i].Mes === '12') {
                        Dic1 = data.data[i].Asistencias;
                    }

            }
            graficaAusentismos(Ene1, Feb1, Mar1, Abril1, May1, Jun1, Jul1, Ago1, Sep1, Oct1, Nov1, Dic1);
        });
    }

    function graficaAusentismos(Ene,Feb, Mar, Abril, May,Jun, Jul, Ago, Sep,Oct, Nov, Dic) {
        var options = {
            series: [{
                name: 'Ausentismos',
                data: [Ene, Feb, Mar, Abril, May, Jun, Jul, Ago, Sep, Oct, Nov, Dic]
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '65%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 5,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dic'],
            },
            yaxis: {
                title: {
                    text: 'Personas'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return " " + val + " personas"
                    }
                }
            }
        };
        var chart = new ApexCharts(document.querySelector("#areaChartTres"), options);
        chart.render();
    }


    //Apu();
    function Apu() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/ausentismo/consultaApu.php', function (data) {

            for (var i = 0; i < data.data.length; i++) {

            }
        });
    }

    graficaAusentismosApu();
    function graficaAusentismosApu() {
        var options = {
            series: [{
                name: 'Website Blog',
                type: 'column',
                data: [440, 505, 414, 671, 227, 413, 201, 352, 752, 320, 257, 160]
            }, {
                name: 'Social Media',
                type: 'line',
                data: [100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100]
            }],
            chart: {
                height: 500,
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
            labels: ['01 Jan 2001', '02 Jan 2001', '03 Jan 2001', '04 Jan 2001', '05 Jan 2001', '06 Jan 2001', '07 Jan 2001', '08 Jan 2001', '09 Jan 2001', '10 Jan 2001', '11 Jan 2001', '12 Jan 2001'],
            yaxis: [{
                title: {
                    text: 'Website Blog',
                },

            }, {
                opposite: true,
                title: {
                    text: 'Objetivo'
                }
            }]
        };

        var chart = new ApexCharts(document.querySelector("#areaChartApu"), options);
        chart.render();
    }


    capacitacionHoras();
    function capacitacionHoras() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaCapacitacionTotal.php', function (data) {

            var Ene1 = 0, Feb1 = 0, Mar1 = 0, Abril1 = 0, May1 = 0, Jun1 = 0, Jul1 = 0, Ago1 = 0,
                Sep1 = 0, Oct1 = 0, Nov1 = 0, Dic1 = 0;

            for (var i = 0; i < data.data.length; i++) {

                    if (data.data[i].Mes === '1') {
                        Ene1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '2') {
                        Feb1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '3') {
                        Mar1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '4') {
                        Abril1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '5') {
                        May1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '6') {
                        Jun1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '7') {
                        Jul1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '8') {
                        Ago1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '9') {
                        Sep1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '10') {
                        Oct1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '11') {
                        Nov1 = data.data[i].TotalHorasCapacitacion ;
                    }
                    if (data.data[i].Mes === '12') {
                        Dic1 = data.data[i].TotalHorasCapacitacion ;
                    }


            }
            graficaCapacitacion(Ene1, Feb1, Mar1, Abril1, May1, Jun1, Jul1, Ago1, Sep1, Oct1, Nov1, Dic1);
        });
    }


    function graficaCapacitacion(cEne, cFeb, cMar, cAbril, cMay, cJun, cJul, cAgo, cSep, cOct, cNov, cDic) {
        var options = {
            series: [{
                name: 'Capacitacion por horas',
                data: [cEne, cFeb, cMar, cAbril, cMay, cJun, cJul, cAgo, cSep, cOct, cNov, cDic]
            }],
            chart: {
                type: 'bar',
                height: 350
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['Ene', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dic'],
            },
            yaxis: {
                title: {
                    text: 'Horas'
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                y: {
                    formatter: function (val) {
                        return " " + val + " Horas"
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#capacitacionChartDos"), options);
        chart.render();
    }


    contadoresEfi();
    function contadoresEfi() {
        $.getJSON('https://grammermx.com/RH/Cursos/dao/consultaApuEficiencia.php', function (data) {
            var aprobadosApu1,reprobadosApu1,totalApu1,porcentaje;
            var aprobadosApu2,reprobadosApu2,totalApu2,porcentaje2;
            var aprobadosApu3,reprobadosApu3,totalApu3,porcentaje3;
            for (var i = 0; i < data.data.length; i++) {

                if (data.data[i].APU === "APU 1"){
                    document.getElementById("txtEfiApApu1").innerHTML = data.data[i].Aprobados;
                    document.getElementById("txtEfiReApu1").innerHTML = data.data[i].Reprobados;

                    aprobadosApu1 = Number(data.data[i].Aprobados);
                    reprobadosApu1 = Number(data.data[i].Reprobados);
                    totalApu1 = aprobadosApu1 + reprobadosApu1;

                    document.getElementById("txtEfiAsApu1").innerHTML = totalApu1;

                    porcentaje = Math.round((aprobadosApu1 * 100) / totalApu1);

                    EfiApu1(porcentaje);
                }

                if (data.data[i].APU === "APU 2"){
                    document.getElementById("txtEfiApApu2").innerHTML = data.data[i].Aprobados;
                    document.getElementById("txtEfiReApu2").innerHTML = data.data[i].Reprobados;

                    aprobadosApu2 = Number(data.data[i].Aprobados);
                    reprobadosApu2 = Number(data.data[i].Reprobados);
                    totalApu2 = aprobadosApu2 + reprobadosApu2;

                    document.getElementById("txtEfiAsApu2").innerHTML = totalApu2;

                    porcentaje2 = Math.round((aprobadosApu2 * 100) / totalApu2);

                    EfiApu2(porcentaje2);
                }

                if (data.data[i].APU === "APU 3"){
                    document.getElementById("txtEfiApApu3").innerHTML = data.data[i].Aprobados;
                    document.getElementById("txtEfiReApu3").innerHTML = data.data[i].Reprobados;

                    aprobadosApu3 = Number(data.data[i].Aprobados);
                    reprobadosApu3 = Number(data.data[i].Reprobados);
                    totalApu3 = aprobadosApu3 + reprobadosApu3;

                    document.getElementById("txtEfiAsApu3").innerHTML = totalApu3;

                    porcentaje3 = Math.round((aprobadosApu3 * 100) / totalApu3);

                    EfiApu3(porcentaje3);
                }

            }
        });
    }

    function EfiApu1(serie) {
        var options1 = {
            series: [serie],
            chart: {
                height: 200,
                type: 'radialBar',
            },
            theme: {
                mode: colors.chartTheme
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: "70%"
                    },
                    track: {
                        background: colors.borderColor
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            show: !0,
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        },
                        value: {
                            formatter: function (e) {
                                return parseInt(e)
                            },
                            fontSize: "1.53125rem",
                            fontWeight: 700,
                            fontFamily: base.defaultFontFamily,
                            offsetY: 5,
                            show: !0,
                            color: colors.headingColor
                        },
                        total: {
                            show: true,
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            label: "Aprobo el",
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "diagonal2",
                    shadeIntensity: .2,
                    gradientFromColors: [extend.primaryColorLighter],
                    gradientToColors: [base.primaryColor],
                    inverseColors: !0,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [20, 100]
                }
            },
            stroke: {
                lineCap: "round"
            },
            labels: ['Porciento'],
        };

        var chart1 = new ApexCharts(document.querySelector("#radialEfiApu1"), options1);
        chart1.render();
    }


    function EfiApu2(serie) {
        var options1 = {
            series: [serie],
            chart: {
                height: 200,
                type: 'radialBar',
            },
            theme: {
                mode: colors.chartTheme
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: "70%"
                    },
                    track: {
                        background: colors.borderColor
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            show: !0,
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        },
                        value: {
                            formatter: function (e) {
                                return parseInt(e)
                            },
                            fontSize: "1.53125rem",
                            fontWeight: 700,
                            fontFamily: base.defaultFontFamily,
                            offsetY: 5,
                            show: !0,
                            color: colors.headingColor
                        },
                        total: {
                            show: true,
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            label: "Aprobo el",
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "diagonal2",
                    shadeIntensity: .2,
                    gradientFromColors: [extend.primaryColorLighter],
                    gradientToColors: [base.primaryColor],
                    inverseColors: !0,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [20, 100]
                }
            },
            stroke: {
                lineCap: "round"
            },
            labels: ['Porciento'],
        };

        var chart1 = new ApexCharts(document.querySelector("#radialEfiApu2"), options1);
        chart1.render();
    }

    function EfiApu3(serie) {
        var options1 = {
            series: [serie],
            chart: {
                height: 200,
                type: 'radialBar',
            },
            theme: {
                mode: colors.chartTheme
            },
            plotOptions: {
                radialBar: {
                    hollow: {
                        size: "70%"
                    },
                    track: {
                        background: colors.borderColor
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            show: !0,
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        },
                        value: {
                            formatter: function (e) {
                                return parseInt(e)
                            },
                            fontSize: "1.53125rem",
                            fontWeight: 700,
                            fontFamily: base.defaultFontFamily,
                            offsetY: 5,
                            show: !0,
                            color: colors.headingColor
                        },
                        total: {
                            show: true,
                            fontSize: "0.875rem",
                            fontWeight: 400,
                            offsetY: -10,
                            label: "Aprobo el",
                            color: colors.mutedColor,
                            fontFamily: base.defaultFontFamily
                        }
                    }
                }
            },
            fill: {
                type: "gradient",
                gradient: {
                    shade: "light",
                    type: "diagonal2",
                    shadeIntensity: .2,
                    gradientFromColors: [extend.primaryColorLighter],
                    gradientToColors: [base.primaryColor],
                    inverseColors: !0,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [20, 100]
                }
            },
            stroke: {
                lineCap: "round"
            },
            labels: ['Porciento'],
        };

        var chart1 = new ApexCharts(document.querySelector("#radialEfiApu3"), options1);
        chart1.render();
    }

</script>

</body>
</html>