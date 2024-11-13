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
                        <form class="searchform searchform-lg">
                            <input class="form-control form-control-lg bg-white rounded-pill pl-5" type="search" placeholder="Search" aria-label="Search">
                            <p class="help-text mt-2 text-muted">Ejemplo 185.1 o 185.2 o 185.3.</p>
                        </form>
                    </div>
                    <div class="row my-4">
                        <div class="col-6 col-lg-3">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <i class="fe fe-info fe-32 text-primary"></i>
                                    <a href="#">
                                        <h3 class="h5 mt-4 mb-1">Getting start</h3>
                                    </a>
                                    <p class="text-muted">Start working with theme</p>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md-->
                        <div class="col-6 col-lg-3">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <i class="fe fe-help-circle fe-32 text-success"></i>
                                    <a href="./page-faqs.html">
                                        <h3 class="h5 mt-4 mb-1">FAQs</h3>
                                    </a>
                                    <p class="text-muted">Frequently asked questions</p>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md-->
                        <div class="col-6 col-lg-3">
                            <div class="card shadow mb-4">
                                <div class="card-body">
                                    <i class="fe fe-globe fe-32 text-warning"></i>
                                    <a href="#">
                                        <h3 class="h5 mt-4 mb-1">Marbete : 185</h3>
                                    </a>
                                    <p class="text-muted">Learn more about products?</p>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md-->
                        <div class="col-6 col-lg-3">
                            <div class="card shadow">
                                <div class="card-body">
                                    <i class="fe fe-alert-triangle fe-32 text-danger"></i>
                                    <a href="#">
                                        <h3 class="h5 mt-4 mb-1">Reporting</h3>
                                    </a>
                                    <p class="text-muted">Report a bug</p>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md-->
                    </div> <!-- .row -->
                    <div class="my-5 p-5">
                        <div class="text-center">
                            <h2 class="mb-0">Marbete : 185</h2>
                            <p class="lead text-muted mb-5">Primer conteo.</p>
                        </div>
                        <div class="row my-5">
                            <div class="col-md-4">
                                <h3 class="h5 mt-4 mb-1">Getting start</h3>
                                <p class="text-muted mb-4">Start working with theme</p>
                                <ul class="list-unstyled">
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Lorem ipsum dolor sit amet</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Consectetur adipiscing elit</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Integer molestie lorem at massa</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Facilisis in pretium nisl aliquet</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Nulla volutpat aliquam velit</li>
                                </ul>
                            </div> <!-- .col-md-->
                            <div class="col-md-4">
                                <h3 class="h5 mt-4 mb-1">Integrations</h3>
                                <p class="text-muted mb-4">How to integrate the theme?</p>
                                <ul class="list-unstyled">
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Lorem ipsum dolor sit amet</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Consectetur adipiscing elit</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Integer molestie lorem at massa</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Facilisis in pretium nisl aliquet</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Nulla volutpat aliquam velit</li>
                                </ul>
                            </div> <!-- .col-md-->
                            <div class="col-md-4">
                                <h3 class="h5 mt-4 mb-1">Reporting</h3>
                                <p class="text-muted mb-4">Report a bug or request a feature</p>
                                <ul class="list-unstyled">
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Lorem ipsum dolor sit amet</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Consectetur adipiscing elit</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Integer molestie lorem at massa</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Facilisis in pretium nisl aliquet</li>
                                    <li class="my-1"><i class="fe fe-file-text mr-2 text-muted"></i>Nulla volutpat aliquam velit</li>
                                </ul>
                            </div> <!-- .col-md-->
                        </div> <!-- .row -->
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <div class="card shadow bg-primary text-center mb-4">
                                <div class="card-body p-5">
                      <span class="circle circle-md bg-primary-light">
                        <i class="fe fe-navigation fe-24 text-white"></i>
                      </span>
                                    <h3 class="h4 mt-4 mb-1 text-white">Sumit a ticket</h3>
                                    <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    <a href="#" class="btn btn-lg bg-primary-light text-white">New Ticket<i class="fe fe-arrow-right fe-16 ml-2"></i></a>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md-->
                        <div class="col-md-6">
                            <div class="card shadow bg-success text-center mb-4">
                                <div class="card-body p-5">
                      <span class="circle circle-md bg-success-light">
                        <i class="fe fe-message-circle fe-24 text-white"></i>
                      </span>
                                    <h3 class="h4 mt-4 mb-1 text-white">Live chart</h3>
                                    <p class="text-white mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                                    <a href="#" class="btn btn-lg bg-success-light text-white">Let chat<i class="fe fe-arrow-right fe-16 ml-2"></i></a>
                                </div> <!-- .card-body -->
                            </div> <!-- .card -->
                        </div> <!-- .col-md-->
                    </div> <!-- .row -->
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
                    <label for="txtFolio">Storage Unit</label>
                    <input type="text" class="form-control"
                           id="txtStorageUnitA" name="txtStorageUnitA" value="">
                    <br>
                    <label for="txtFolio">Ingresar NP</label>
                    <input type="text" class="form-control"
                           id="txtNumeroParteA" name="txtNumeroParteA" value="">
                    <br>
                    <label for="txtFolio">Ingresar la cantidad</label>
                    <input type="text" class="form-control"
                           id="txtCantidadA" name="txtCantidadA" value="">
                    <br>
                    <button type="submit" id="btnEnviarNuevos" class="btn btn-primary">Enviar</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

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

    let html5QrcodeScanner;
    let html5QrcodeScannerUnit;
    var numeroParte;
    var storageBin;

    var numeroParteUnit;
    var cantidad;

    function manualMarbete() {

        var marbete = document.getElementById("scanner_input").value.split('.')[0];

        $.getJSON('https://grammermx.com/Inventario/dao/consultaMarbete.php?marbete='+marbete, function (data) {
            for (var i = 0; i < data.data.length; i++) {
                if (data.data[i].Id_Marbete) {
                    numeroParte=data.data[i].Numero_Parte;
                    storageBin=data.data[i].StorageBin;
                    document.getElementById("reader").style.display = 'none';
                    document.getElementById("Ubicacion").innerHTML = "Ubicación : "+storageBin;
                    document.getElementById("pasoDos").style.display = 'block';
                    document.getElementById("pasoUno").style.display = 'none';
                    html5QrcodeScanner.clear();
                    html5QrcodeScanner.pause();
                } else {
                    alert('Id_Marbete no existe en el objeto data');
                }
            }
        });
    }

    function lecturaCorrecta(decodedText, decodedResult) {

        var marbete = decodedText.split('.')[0];

        $.getJSON('https://grammermx.com/Inventario/dao/consultaMarbete.php?marbete='+marbete, function (data) {
            for (var i = 0; i < data.data.length; i++) {
                if (data.data[i].Id_Marbete) {
                    numeroParte=data.data[i].Numero_Parte;
                    storageBin=data.data[i].StorageBin;
                    console.log(`Code matched = ${decodedText}`, decodedResult);
                    document.getElementById("scanner_input").value = decodedText;
                    document.getElementById("reader").style.display = 'none';
                    //document.getElementById("lblNumeroParte").innerText = "Número de parte : "+numeroParte;
                    document.getElementById("Ubicacion").innerHTML = "Ubicación : "+storageBin;
                    document.getElementById("pasoDos").style.display = 'block';
                    document.getElementById("pasoUno").style.display = 'none';
                    html5QrcodeScanner.clear();
                    html5QrcodeScanner.pause();

                } else {
                    alert('Id_Marbete no existe en el objeto data');
                }
            }
        });

    }

    function cargarTabla(marbete) {

        $.getJSON('https://grammermx.com/Inventario/dao/consultaMarbeteV.php?marbete='+marbete, function (data) {
            for (var i = 0; i < data.data.length; i++) {
                if (data.data[i].Id_Bitacora) {

                    var table = document.getElementById("data-table");
                    var row = table.insertRow(-1); // Crea una nueva fila al final de la tabla
                    var cell1 = row.insertCell(0); // Crea una nueva celda en la fila
                    var cell2 = row.insertCell(1); // Crea otra nueva celda en la fila
                    var cell3 = row.insertCell(2); // Crea otra nueva celda en la fila
                    cell1.innerHTML = data.data[i].StorageUnit; // Agrega el número de parte a la primera celda
                    cell2.innerHTML = data.data[i].Usuario; // Agrega la cantidad a la segunda celda
                    cell3.innerHTML = data.data[i].NumeroParte; // Agrega la cantidad a la segunda celda

                } else {
                    alert('Id_Marbete no existe en el objeto data');
                }
            }
        });
    }

    function errorLectura(error) {
        console.warn(`Code scan error = ${error}`);
    }

    function escaneo() {
        html5QrcodeScanner = new Html5QrcodeScanner(
            "reader",
            { fps: 10, qrbox: {width: 250, height: 250} },
            /* verbose= */ false);
        document.getElementById("reader").style.display = 'block';
        html5QrcodeScanner.render(lecturaCorrecta, errorLectura);
    }

    var addedStorageUnits = {};

    function storageUnitManual() {
        $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaStorageUnit.php?storageUnit='+document.getElementById("txtStorageUnit").value, function (data) {
            if (data.Estatus) {
                Swal.fire({
                    title: "El storage unit ya fue registrado por otro usuario",
                    text: "Escanea otro storage unit",
                    icon: "error"
                });
            } else {
                for (var i = 0; i < data.data.length; i++) {
                    if (data.data[i].Id_StorageUnit) {
                        if (addedStorageUnits[data.data[i].Id_StorageUnit]) {
                            return;
                        }

                        addedStorageUnits[data.data[i].Id_StorageUnit] = true;

                        numeroParteUnit = data.data[i].Numero_Parte;
                        if (numeroParteUnit === numeroParte) {
                            cantidad = data.data[i].Cantidad;
                            var table = document.getElementById("data-table");
                            var row = table.insertRow(-1); // Crea una nueva fila al final de la tabla
                            var cell1 = row.insertCell(0); // Crea una nueva celda en la fila
                            var cell2 = row.insertCell(1); // Crea otra nueva celda en la fila
                            var cell3 = row.insertCell(2); // Crea otra nueva celda en la fila
                            cell1.innerHTML = numeroParteUnit; // Agrega el número de parte a la primera celda
                            cell2.innerHTML = numeroParteUnit; // Agrega la cantidad a la segunda celda
                            cell3.innerHTML = cantidad; // Agrega la cantidad a la segunda celda

                            //html5QrcodeScannerUnit.clear();
                            //html5QrcodeScannerUnit.pause();
                            Swal.fire({
                                title: "Storage unit escaneado",
                                text: "Unit : " + data.data[i].Id_StorageUnit,
                                icon: "success"
                            });
                            document.getElementById("txtStorageUnit").value = '';
                        } else {
                            Swal.fire({
                                title: "El número de parte no corresponde",
                                text: "Escanea el storage unit correcto",
                                icon: "error"
                            });
                            document.getElementById("txtStorageUnit").value = '';
                        }
                    } else {
                        Swal.fire({
                            title: "El storage unit no es correcto",
                            text: "Escanea el storage unit correcto",
                            icon: "error"
                        });
                        document.getElementById("txtStorageUnit").value = '';
                    }
                }
            }
        });
    }

    function lecturaCorrectaUnit(decodedText, decodedResult) {
        $.getJSON('https://grammermx.com/Inventario/dao/consultaStorageUnit.php?storageUnit='+decodedText, function (data) {

            if (data.Estatus) {
                Swal.fire({
                    title: "El storage unit ya existe",
                    text: "Escanea otro storage unit",
                    icon: "error"
                });
            } else {
                for (var i = 0; i < data.data.length; i++) {
                    if (data.data[i].Id_StorageUnit) {
                        if (addedStorageUnits[data.data[i].Id_StorageUnit]) {
                            return;
                        }

                        addedStorageUnits[data.data[i].Id_StorageUnit] = true;

                        numeroParteUnit=data.data[i].Numero_Parte;
                        if (numeroParteUnit===numeroParte){
                            cantidad=data.data[i].Cantidad;
                            console.log(`Code matched = ${decodedText}`, decodedResult);
                            document.getElementById("txtStorageUnit").value = decodedText;
                            //document.getElementById("readerDos").style.display = 'none';

                            var table = document.getElementById("data-table");
                            var row = table.insertRow(-1); // Crea una nueva fila al final de la tabla
                            var cell1 = row.insertCell(0); // Crea una nueva celda en la fila
                            var cell2 = row.insertCell(1); // Crea otra nueva celda en la fila
                            var cell3 = row.insertCell(2); // Crea otra nueva celda en la fila
                            cell1.innerHTML = numeroParteUnit; // Agrega el número de parte a la primera celda
                            cell2.innerHTML = numeroParteUnit; // Agrega la cantidad a la segunda celda
                            cell3.innerHTML = cantidad; // Agrega la cantidad a la segunda celda

                            //html5QrcodeScannerUnit.clear();
                            //html5QrcodeScannerUnit.pause();
                            Swal.fire({
                                title: "Storage unit escaneado",
                                text: "Unit : "+data.data[i].Id_StorageUnit,
                                icon: "success"
                            });
                        } else {
                            Swal.fire({
                                title: "El número de parte no corresponde",
                                text: "Escanea el storage unit correcto",
                                icon: "error"
                            });
                        }
                    } else {
                        Swal.fire({
                            title: "El storage unit no es correcto",
                            text: "Escanea el storage unit correcto",
                            icon: "error"
                        });
                    }
                }
            }
        });
    }

    function errorLecturaUnit(error) {
        console.warn(`Code scan error = ${error}`);
    }

    function escaneoUnit() {
        html5QrcodeScannerUnit = new Html5QrcodeScanner(
            "readerDos",
            { fps: 10, qrbox: {width: 250, height: 250} },
            /* verbose= */ false);
        document.getElementById("readerDos").style.display = 'block';
        html5QrcodeScannerUnit.render(lecturaCorrectaUnit, errorLecturaUnit);
    }

    function enviarDatos() {
        var nombre = document.getElementById("txtNombre").value;
        var comentarios = document.getElementById("txtComentarios").value;
        var folioMarbete = document.getElementById("scanner_input").value;

        var storageUnits = Object.keys(addedStorageUnits);

        fetch('https://grammermx.com/Logistica/Inventario/dao/guardarMarbete.php', { // Cambia esto por la URL de tu script PHP
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                nombre: nombre,
                comentarios: comentarios,
                storageUnits: storageUnits,
                folioMarbete: folioMarbete
            })
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log("La operación fue exitosa");
                } else {
                    console.log("Hubo un error en la operación");
                    console.log("Las unidades de almacenamiento que fallaron son: ", data.failedUnits);
                }
            });
    }

</script>
</body>
</html>