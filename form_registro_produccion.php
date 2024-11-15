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
            <div class="row">
                <div class="col-md-6">
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <p class="mb-3"><strong>Captura</strong></p>

                            <label for="basic-url">Numero de parte</label>
                            <div class="input-group mb-3">
                                <input type="text" id="txtNumeroParte" class="form-control"  aria-label="Recipient's username" aria-describedby="button-addon2">
                            </div>

                            <label for="basic-url">Cantidad</label>
                            <div class="input-group mb-3">
                                <input type="text" id="txtCantidad" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="txtUnidadMedida" style=""></span>
                                </div>
                            </div>

                            <label for="basic-url">Storage Bin</label>
                            <div class="input-group mb-3">
                                <input type="text" id="txtStorageBin" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>

                        </div>
                    </div>
                </div> <!-- /.col -->

                <div class="col-md-6 col-xl-6 mb-4">
                    <div class="card shadow">
                        <div class="card-header">
                            <span class="card-title">Marbete : <span id="lblFolio"></span></span>
                            <a class="float-right small text-muted" href="#!"><i class="fe fe-more-vertical fe-12"></i></a>
                        </div>
                        <div class="card-body my-n2">
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <span class="card-title">Numero de parte</span>
                                    <h4 class="mb-0" id="lblNumeroParte"></h4>
                                </div>
                                <div class="flex-fill text-right">
                                    <p class="mb-0 small" id="lblCosto"></p>
                                    <p class="text-muted mb-0 small">Euros</p>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <span class="card-title">Cantidad</span>
                                    <h4 class="mb-0" id="lblCantidad"> <span id="lblUm"></span></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <span class="card-title">Descripcion</span>
                                    <h4 class="mb-0" id="lblDescripcion"></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <span class="card-title">Storage Bin</span>
                                    <h4 class="mb-0" id="lblStorageBin"></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <a href="profile-posts.html" class="avatar avatar-md">
                                        <img src="https://grammermx.com/Fotos/00001004.png" alt="..." class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <strong class="mb-1" id="lblNombre">Aaron Asher</strong><span class="dot dot-lg bg-success ml-1"></span>
                                    <p class="small text-muted mb-1" id="lblRol">Capturista</p>
                                </div>
                            </div>
                            <hr>
                            <label for="basic-url">Comentarios</label>
                            <div class="input-group mb-3">
                                <input type="text" id="txtComentarios" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            </div>
                            <button id="btnFin" disabled class="btn mb-2 btn-success float-right text-white" onclick="enviarDatos()">Finalizar Captura<span
                                        class="fe fe-chevron-right fe-16 ml-2" ></span></button>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div> <!-- .col -->

            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

    </main> <!-- main -->

</div> <!-- .wrapper -->

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
    var costoUnitario=0;
    var bandera=0;
    // Cuando se suelta una tecla en el campo de entrada del número de parte
    document.getElementById('txtNumeroParte').addEventListener('keyup', function(event) {
        // Si la tecla fue Enter
        document.getElementById('lblNumeroParte').textContent = this.value;
        if (event.key === 'Enter' || event.keyCode === 13) {
            $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaParte.php?parte='+this.value, function (data) {
                for (var i = 0; i < data.data.length; i++) {
                    if (data.data[i].GrammerNo) {
                        document.getElementById('lblDescripcion').innerText = data.data[i].Descripcion;
                        document.getElementById('txtUnidadMedida').innerText = data.data[i].UM;
                        costoUnitario = data.data[i].Costo / data.data[i].Por;
                        document.getElementById('lblCosto').innerText = costoUnitario;
                        document.getElementById('txtCantidad').focus();
                        bandera=1;
                    } else {
                        bandera=0;
                        Swal.fire({
                            title: "El numero de parte no existe",
                            text: "Verificalo con la mesa de control",
                            icon: "error"
                        });
                    }
                }
            });

        }
    });

    // Cuando se suelta una tecla en el campo de entrada de la cantidad
    document.getElementById('txtCantidad').addEventListener('keyup', function(event) {
        // Si la tecla fue Enter
        document.getElementById('lblCantidad').textContent = this.value;
        if (event.key === 'Enter' || event.keyCode === 13) {
            document.getElementById('lblCantidad').textContent = this.value;
            document.getElementById('txtStorageBin').focus();
        }
    });

    // Cuando se suelta una tecla en el campo de entrada del storage bin
    document.getElementById('txtStorageBin').addEventListener('keyup', function(event) {
        // Si la tecla fue Enter
        document.getElementById('lblStorageBin').textContent = this.value;
        if (event.key === 'Enter' || event.keyCode === 13) {
            // Actualiza el texto del elemento lblStorageBin
            document.getElementById('lblStorageBin').textContent = this.value;

            if (document.getElementById('txtCantidad').value!==""){
                if (document.getElementById('txtStorageBin').value!==""){
                    if (bandera!=="0"){
                        document.getElementById('btnFin').disabled = false;
                    }else{
                        Swal.fire({
                            title: "No haz validado el NP",
                            text: "Verifica antes de entrar",
                            icon: "error"
                        });
                    }
                }else{
                    Swal.fire({
                        title: "Ingresa el storage bin",
                        text: "Verifica antes de entrar",
                        icon: "error"
                    });
                }
            }else{
                Swal.fire({
                    title: "Ingresa la cantidad",
                    text: "Verifica antes de entrar",
                    icon: "error"
                });
            }
        }
    });

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
                        document.getElementById("lblFolio").innerHTML = marbete;
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



    function enviarDatos() {

        var marbete = document.getElementById("scanner_input").value
        var nombre = document.getElementById("lblNombre").innerText;
        var comentarios = document.getElementById("txtComentarios").value;
        var numeroParte = document.getElementById("txtNumeroParte").value;
        var cantidad = document.getElementById("txtCantidad").value;
        var storageBin = document.getElementById("txtStorageBin").value;

        var formData = new FormData();
        formData.append('nombre', nombre);
        formData.append('comentarios', comentarios);
        formData.append('folioMarbete', marbete);
        formData.append('numeroParte', numeroParte);
        formData.append('cantidad', cantidad);
        formData.append('storageBin', storageBin);

        fetch('https://grammermx.com/Logistica/Inventario/dao/guardarMarbeteProduccion.php', {
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



</script>
</body>
</html>