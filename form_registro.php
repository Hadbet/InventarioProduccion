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
                    <div id="readerAbierto" width="600px"></div>
                    <button onclick="escaneoUnitAbierto()" id="" class="btn btn-primary">Activar escaner</button>
                <br><br>
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
                    <button onclick="cargaCajaAbierta()" id="btnEnviarNuevos" class="btn btn-primary">Enviar</button>
            </div>
            <div class="modal-footer">
                <button id="btnCerrarModal" type="button" class="btn mb-2 btn-secondary" data-dismiss="modal">Cerrar</button>
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
    let html5QrcodeScannerUnitA;

    var numeroParte;
    var storageBin;

    var numeroParteUnit;
    var cantidad;

    function manualMarbete() {

        var marbete = document.getElementById("scanner_input").value.split('.')[0];

        $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaMarbete.php?marbete='+marbete, function (data) {
            for (var i = 0; i < data.data.length; i++) {
                if (data.data[i].FolioMarbete) {
                    if (data.data[i].Estatus === '0'){
                        numeroParte=data.data[i].NumeroParte;
                        storageBin=data.data[i].StorageBin;
                        document.getElementById("reader").style.display = 'none';
                        document.getElementById("Ubicacion").innerHTML = "Ubicación : "+storageBin;
                        document.getElementById("pasoDos").style.display = 'block';
                        document.getElementById("pasoUno").style.display = 'none';
                        html5QrcodeScanner.clear();
                        html5QrcodeScanner.pause();
                    }else{
                        Swal.fire({
                            title: "El marbete ya fue registrado",
                            text: "Escanea otro marbete",
                            icon: "error"
                        });
                    }
                } else {
                    Swal.fire({
                        title: "El marbete no esta cargado",
                        text: "Verificalo con la mesa central",
                        icon: "error"
                    });
                }
            }
        });
    }

    function lecturaCorrecta(decodedText, decodedResult) {

        var marbete = decodedText.split('.')[0];

        $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaMarbete.php?marbete='+marbete, function (data) {
            for (var i = 0; i < data.data.length; i++) {
                if (data.data[i].FolioMarbete) {
                    if (data.data[i].Estatus === '0'){
                        numeroParte=data.data[i].NumeroParte;
                        storageBin=data.data[i].StorageBin;
                        console.log(`Code matched = ${decodedText}`, decodedResult);
                        document.getElementById("scanner_input").value = decodedText;
                        document.getElementById("reader").style.display = 'none';
                        document.getElementById("Ubicacion").innerHTML = "Ubicación : "+storageBin;
                        document.getElementById("pasoDos").style.display = 'block';
                        document.getElementById("pasoUno").style.display = 'none';
                        html5QrcodeScanner.clear();
                        html5QrcodeScanner.pause();
                    }else{
                        Swal.fire({
                            title: "El marbete ya fue registrado",
                            text: "Escanea otro marbete",
                            icon: "error"
                        });
                    }
                } else {
                    Swal.fire({
                        title: "El marbete no esta cargado",
                        text: "Verificalo con la mesa central",
                        icon: "error"
                    });
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
        $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaStorageUnit.php?storageUnit='+document.getElementById("txtStorageUnit").value+'&bin='+storageBin, function (data) {
            if (data.Estatus) {
                Swal.fire({
                    title: data.Estatus,
                    text: "Escanea otro storage unit",
                    icon: "error"
                });
            } else {
                for (var i = 0; i < data.data.length; i++) {
                    if (data.data[i].Id_StorageUnit) {
                        if (addedStorageUnits[data.data[i].Id_StorageUnit]) {
                            return;
                        }

                        addedStorageUnits[data.data[i].Id_StorageUnit] = {
                            numeroParte: data.data[i].Numero_Parte,
                            cantidad: data.data[i].Cantidad
                        };

                        numeroParteUnit = data.data[i].Numero_Parte;
                        if (numeroParteUnit === numeroParte) {
                            cantidad = data.data[i].Cantidad;
                            var table = document.getElementById("data-table");
                            var row = table.insertRow(-1);
                            var cell1 = row.insertCell(0);
                            var cell2 = row.insertCell(1);
                            var cell3 = row.insertCell(2);
                            cell1.innerHTML = data.data[i].Id_StorageUnit;
                            cell2.innerHTML = numeroParteUnit;
                            cell3.innerHTML = cantidad;

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

                        addedStorageUnits[data.data[i].Id_StorageUnit] = {
                            numeroParte: data.data[i].Numero_Parte,
                            cantidad: data.data[i].Cantidad
                        };

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
                            cell1.innerHTML = data.data[i].Id_StorageUnit;
                            cell2.innerHTML = numeroParteUnit;
                            cell3.innerHTML = cantidad;
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

        var storageUnits = addedStorageUnits;
        console.log(storageUnits);

        var formData = new FormData();
        formData.append('nombre', nombre);
        formData.append('comentarios', comentarios);
        formData.append('storageUnits', JSON.stringify(storageUnits));
        formData.append('folioMarbete', folioMarbete);

        fetch('https://grammermx.com/Logistica/Inventario/dao/guardarMarbete.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    let timerInterval;
                    Swal.fire({
                        title: "¡Gracias!.Se finalizo la captura de tu marbete",
                        html: "Te regresaremos a la pagina <b></b> milliseconds.",
                        timer: 1500,
                        timerProgressBar: true,
                        icon: "success",
                        didOpen: () => {
                            Swal.showLoading();
                            const timer = Swal.getPopup().querySelector("b");
                            timerInterval = setInterval(() => {
                                timer.textContent = `${Swal.getTimerLeft()}`;
                            }, 100);
                        },
                        willClose: () => {
                            clearInterval(timerInterval);
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            location.reload();
                        }
                    });
                } else {
                    console.log("Hubo un error en la operación");
                    console.log("Las unidades de almacenamiento que fallaron son: ", data.failedUnits);
                }
            });
    }




    function lecturaCorrectaUnitAbierto(decodedText, decodedResult) {
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
                        numeroParteUnit=data.data[i].Numero_Parte;
                        if (numeroParteUnit===numeroParte){
                            document.getElementById("txtStorageUnitA").value = decodedText;
                            document.getElementById("txtNumeroParteA").value = numeroParteUnit;
                            html5QrcodeScannerUnitA.clear();
                            html5QrcodeScannerUnitA.pause();
                            document.getElementById("readerAbierto").style.display = 'none';
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

    function errorLecturaAbierto(error) {
        console.warn(`Code scan error = ${error}`);
    }

    function escaneoUnitAbierto() {
        html5QrcodeScannerUnitA = new Html5QrcodeScanner(
            "readerAbierto",
            { fps: 10, qrbox: {width: 250, height: 250} },
            /* verbose= */ false);
        document.getElementById("readerAbierto").style.display = 'block';
        html5QrcodeScannerUnitA.render(lecturaCorrectaUnitAbierto, errorLecturaAbierto);
    }

    function cargaCajaAbierta() {

        var storageA = document.getElementById("txtStorageUnitA").value;
        var numeroParteA = document.getElementById("txtNumeroParteA").value;
        var cantidadA = document.getElementById("txtCantidadA").value;

        if (addedStorageUnits[storageA]) {
            Swal.fire({
                title: "Storage unit ya esta ingresado en la tabla",
                text: "Verifique",
                icon: "error"
            });
            return;
        }

        addedStorageUnits[storageA] = {
            numeroParte: numeroParteA,
            cantidad: cantidadA
        };

            var table = document.getElementById("data-table");
            var row = table.insertRow(-1);
            var cell1 = row.insertCell(0);
            var cell2 = row.insertCell(1);
            var cell3 = row.insertCell(2);
            cell1.innerHTML = storageA;
            cell2.innerHTML = numeroParteA;
            cell3.innerHTML = cantidadA;

            document.getElementById("btnCerrarModal").click();

            document.getElementById("txtStorageUnitA").value = "";
            document.getElementById("txtNumeroParteA").value = "";
            document.getElementById("txtCantidadA").value = "";

            Swal.fire({
                title: "Storage unit escaneado",
                text: "Unit : " + storageA,
                icon: "success"
            });
            document.getElementById("txtStorageUnit").value = '';
    }

</script>
</body>
</html>