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
        <br><br>

        <div class="container-fluid" id="pasoUno">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Paso 1 : Escaneo de marbete</h2>
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <strong class="card-title">Captura</strong>
                        </div>
                        <div class="card-body">
                            <div class="row">
                               <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input style="display:none;" type="text" class="form-control"
                                                   id="txtNomina" name="txtNomina" value="00001606">
                                            <input style="display:none;" type="text" class="form-control"
                                                   id="txtNombre" name="txtNombre" value="Nancy Goiz">
                                            <label for="txtFolio">Escanea el marbete</label>
                                            <div id="reader" width="600px"></div>
                                            <input type="text" class="form-control"
                                                   id="scanner_input">
                                            <br>
                                       </div>
                                    </div> <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <br>
                                            <button class="btn btn-success text-white mt-2" onclick="escaneo()">Escanear</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button class="btn mb-2 btn-success float-right text-white" onclick="manualMarbete()">Siguiente<span
                                    class="fe fe-chevron-right fe-16 ml-2"></span></button>
                        </div>
                    </div> <!-- / .card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

        <div class="container-fluid" id="pasoDos" style="display: none">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Paso 2 : Escaneo de Storage Unit</h2>
                    <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong id="Ubicacion" class="card-title h4"></strong>
                                <button
                                        class="btn btn-info float-right text-white" data-toggle="modal" data-target=".modal-right">Caja Abierta<span
                                            class="fe fe-chevron-right fe-16 ml-2"></span></button>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input style="display:none;" type="text" class="form-control"
                                                   id="txtNomina" name="txtNomina" value="00001606">
                                            <input style="display:none;" type="text" class="form-control"
                                                   id="txtNombre" name="txtNombre" value="Nancy Goiz">
                                            <label for="txtFolio">Escanea el Storage Unit</label>
                                            <div id="readerDos" width="600px"></div>
                                            <input type="text" class="form-control"
                                                   id="txtStorageUnit" name="txtStorageUnit" value="">
                                            <br>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <br>
                                            <button class="btn btn-warning text-white mt-2" onclick="storageUnitManual()">Ingresar Manual</button>
                                            <button class="btn btn-success text-white mt-2" onclick="escaneoUnit()">Activar Escaner</button>
                                        </div>
                                    </div>
                                </div>

                                <table id="data-table" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Storage Unit</th>
                                        <th>Numero Parte</th>
                                        <th>Cantidad</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input style="display:none;" type="text" class="form-control"
                                                   id="txtNomina" name="txtNomina" value="00001606">
                                            <input style="display:none;" type="text" class="form-control"
                                                   id="txtNombre" name="txtNombre" value="Nancy Goiz">
                                            <label for="txtFolio">Capturado por :</label>
                                            <input type="text" class="form-control"
                                                   id="txtNombre" name="txtNombre" value="" disabled>
                                            <br>
                                        </div>
                                    </div> <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="txtFolio">Comentarios</label>
                                            <input type="text" class="form-control"
                                                   id="txtComentarios" name="txtComentarios" value="">

                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="card-footer">
                                <button type="submit"
                                        class="btn mb-2 btn-success float-right text-white" onclick="enviarDatos()">Finalizar Captura<span
                                            class="fe fe-chevron-right fe-16 ml-2"></span></button>
                            </div>
                    </div> <!-- / .card -->
                </div> <!-- .col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

        <div class="container-fluid" id="pasoTres" style="display: none">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="page-title">Paso 3 : Verifica la informacion</h2>
                    <div class="card shadow mb-4">
                        <form action="dao/subirMasArchivos.php" method="post" enctype="multipart/form-data">
                            <div class="card-header">
                                <strong class="card-title">Captura</strong>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                            <input style="display:none;" type="text" class="form-control"
                                                   id="txtNomina" name="txtNomina" value="00001606">
                                            <input style="display:none;" type="text" class="form-control"
                                                   id="txtNombre" name="txtNombre" value="Nancy Goiz">
                                            <label for="txtFolio">Capturado por :</label>
                                            <input type="text" class="form-control"
                                                   id="txtFolio" name="txtFolio" value="" disabled>
                                            <br>
                                        </div>
                                    </div> <!-- /.col -->
                                    <div class="col-md-6">
                                        <div class="form-group">

                                            <label for="txtFolio">Comentarios</label>
                                            <input type="text" class="form-control"
                                                   id="txtFolio" name="txtFolio" value="">

                                        </div>
                                    </div>
                                </div>

                                <table  id="data-tableD" class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th>Storage Unit</th>
                                        <th>Numero Parte</th>
                                        <th>Cantidad</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>



                            </div>
                            <div class="card-footer">
                                <button type="submit"
                                        class="btn mb-2 btn-success float-right text-white">Finalizar Captura<span
                                            class="fe fe-chevron-right fe-16 ml-2"></span></button>
                            </div>

                        </form>
                    </div> <!-- / .card -->
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
        $.getJSON('https://grammermx.com/Inventario/dao/consultaStorageUnit.php?storageUnit='+document.getElementById("txtStorageUnit").value, function (data) {
            for (var i = 0; i < data.data.length; i++) {
                if (data.data[i].Id_StorageUnit) {
                    if (addedStorageUnits[data.data[i].Id_StorageUnit]) {
                        return;
                    }

                    addedStorageUnits[data.data[i].Id_StorageUnit] = true;

                    numeroParteUnit=data.data[i].Numero_Parte;
                    if (numeroParteUnit===numeroParte){
                        cantidad=data.data[i].Cantidad;
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
        });
    }

    function lecturaCorrectaUnit(decodedText, decodedResult) {
        $.getJSON('https://grammermx.com/Inventario/dao/consultaStorageUnit.php?storageUnit='+decodedText, function (data) {
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
                // Aquí puedes manejar la respuesta de tu servidor
                console.log(data);
            })
            .catch((error) => {
                // Aquí puedes manejar los errores
                console.error('Error:', error);
            });
    }

</script>
</body>
</html>