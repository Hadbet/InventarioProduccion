
<?php
session_start();
$rol =$_SESSION['rol'];
$area =$_SESSION['area'];
$areaNombre =$_SESSION['AreaNombre'];
$bin =$_SESSION['StBin'];
$nomina =$_SESSION['nomina'];
$nombre =$_SESSION['nombre'];

if (strlen($nomina) == 1) {
    $nomina = "0000000" . $nomina;
}
if (strlen($nomina) == 2) {
    $nomina = "000000" . $nomina;
}
if (strlen($nomina) == 3) {
    $nomina = "00000" . $nomina;
}
if (strlen($nomina) == 4) {
    $nomina = "0000" . $nomina;
}
if (strlen($nomina) == 5) {
    $nomina = "000" . $nomina;
}
if (strlen($nomina) == 6) {
    $nomina = "00" . $nomina;
}
if (strlen($nomina) == 7) {
    $nomina = "0" . $nomina;
}

?>

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
        <h2 style="display: none" class="page-title" id="conteoAviso"></h2>
        <div class="container-fluid" id="pasoUno">
            <br>
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
                            <p class="mb-3"><strong>Verificacion</strong></p>

                            <label for="basic-url">Cantidad</label>
                            <div class="input-group mb-3">
                                <input type="text" id="txtCantidad" class="form-control" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="txtUnidadMedida" style=""></span>
                                </div>
                            </div>

                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <a href="profile-posts.html" class="avatar avatar-md">
                                        <img src="https://grammermx.com/Fotos/<?php echo $nomina?>.png" alt="..." class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <strong class="mb-1" id="lblNombre"><?php echo $nombre?></strong><span class="dot dot-lg bg-success ml-1"></span>
                                    <p class="small text-muted mb-1" id="lblRol">Verificador</p>
                                </div>
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
                                    <p class="text-muted mb-0 small">Pesos</p>
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
                            <div class="d-flex">
                                <div class="flex-fill">
                                    <span class="card-title">Monto Total</span>
                                    <h4 class="mb-0" id="lblMontoTotal"></h4>
                                </div>
                            </div>
                            <hr>
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <a href="profile-posts.html" class="avatar avatar-md">
                                        <img id="imagenCapturador" alt="..." class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="col ml-n2">
                                    <strong class="mb-1" id="lblNombreCapturador"></strong><span class="dot dot-lg bg-success ml-1"></span>
                                    <p class="small text-muted mb-1" id="lblRol">Capturista</p>
                                </div>
                            </div>
                            <hr>
                            <button id="btnFin" class="btn mb-2 btn-success float-right text-white" onclick="enviarDatos()">Finalizar Captura<span
                                        class="fe fe-chevron-right fe-16 ml-2" ></span></button>
                        </div> <!-- .card-body -->
                    </div> <!-- .card -->
                </div> <!-- .col -->

            </div> <!-- .row -->
        </div> <!-- .container-fluid -->

        <!-- Button trigger modal -->
        <button style="display: none" type="button" class="btn mb-2 btn-outline-success" data-toggle="modal" data-target="#verticalModal" id="btnModal"> Launch demo modal </button>
        <!-- Modal -->
        <div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="verticalModalTitle">Desbloquear</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Usuario:</label>
                            <input type="text" class="form-control" id="txtUsuarioM">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Contraseña:</label>
                            <input type="password" class="form-control" id="txtPasswordM">
                        </div>
                        <hr>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn mb-2 btn-success text-white" onclick="verificarUsuario()" >Validar</button>
                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal" id="btnCloseM">Close</button>
                    </div>
                </div>
            </div>
        </div>


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

    var auxConteo=0;
    estatusConteo();
    function estatusConteo() {
        $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaAreaDetalle.php?area=<?php echo $area;?>', function (data) {
            for (var i = 0; i < data.data.length; i++) {
                auxConteo = data.data[i].Conteo;

                if (auxConteo == 1){
                    document.getElementById("conteoAviso").style.display="block";
                    document.getElementById("conteoAviso").innerText="Primer Conteo";
                }

                if (auxConteo == 2){
                    document.getElementById("conteoAviso").style.display="block";
                    document.getElementById("conteoAviso").innerText="Segundo Conteo";
                }
            }
        });
    }


    var banderaModal=false;

    $(document).ready(function(){
        $('#customSwitch1').change(function(){
            if($(this).is(":checked")) {
                //$('#txtNumeroParte').prop('disabled', false);

                $('#btnModal').click();
            } else {
                $('#txtNumeroParte').prop('disabled', true);
            }
        });

        $('#verticalModal').on('hidden.bs.modal', function (e) {
            // Set the checkbox to false
            if (!banderaModal){
                $('#customSwitch1').prop('checked', false);
            }
        });
    });

    var costoUnitario=0;
    var bandera=0;

    var numeroParte;
    var storageBin;
    var cantidad=0;

    var numeroParteUnit;

    function manualMarbete() {

        var marbete = document.getElementById("scanner_input").value.split('.')[0];

        if (document.getElementById("scanner_input").value.split('.')[1] === auxConteo){
            $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaMarbeteValidacion.php?marbete='+marbete+'&conteo='+auxConteo, function (data) {

                if (data && data.data && data.data.length > 0) {
                    for (var i = 0; i < data.data.length; i++) {
                        if (data.data[i].FolioMarbete) {
                            if (data.data[i].Estatus === '2'){
                                numeroParte=data.data[i].NumeroParte;
                                storageBin=data.data[i].StorageBin;
                                cantidad=data.data[i].PrimerConteo;
                                var usuario = data.data[i].Usuario;
                                var separado = usuario.split("-"); // Esto dividirá la cadena en dos partes en el lugar donde se encuentra el guión.
                                var numeroNomina = separado[0]; // Esto te dará la primera parte, que es el número de nómina.
                                var nombre = separado[1]; // Esto te dará la segunda parte, que es el nombre.
                                document.getElementById("lblNombreCapturador").innerText = nombre;
                                document.getElementById("imagenCapturador").src = 'https://grammermx.com/Fotos/'+numeroNomina+'.png';
                                document.getElementById("reader").style.display = 'none';
                                document.getElementById("lblFolio").innerHTML = marbete;
                                document.getElementById("pasoDos").style.display = 'block';
                                document.getElementById("pasoUno").style.display = 'none';
                                document.getElementById("lblStorageBin").innerText = storageBin;
                                document.getElementById("lblNumeroParte").innerText = numeroParte;
                                document.getElementById("lblCantidad").innerText = data.data[i].PrimerConteo;
                                cargaPrimer(numeroParte);
                            }else if(data.data[i].SegFolio === '2'){
                                numeroParte=data.data[i].NumeroParte;
                                storageBin=data.data[i].StorageBin;
                                cantidad=data.data[i].PrimerConteo;
                                var usuario = data.data[i].Usuario;
                                var separado = usuario.split("-"); // Esto dividirá la cadena en dos partes en el lugar donde se encuentra el guión.
                                var numeroNomina = separado[0]; // Esto te dará la primera parte, que es el número de nómina.
                                var nombre = separado[1]; // Esto te dará la segunda parte, que es el nombre.
                                document.getElementById("lblNombreCapturador").innerText = nombre;
                                document.getElementById("imagenCapturador").src = 'https://grammermx.com/Fotos/'+numeroNomina+'.png';
                                document.getElementById("reader").style.display = 'none';
                                document.getElementById("lblFolio").innerHTML = marbete;
                                document.getElementById("pasoDos").style.display = 'block';
                                document.getElementById("pasoUno").style.display = 'none';
                                document.getElementById("lblStorageBin").innerText = storageBin;
                                document.getElementById("lblNumeroParte").innerText = numeroParte;
                                document.getElementById("lblCantidad").innerText = data.data[i].PrimerConteo;
                                cargaPrimer(numeroParte);
                            }else{
                                Swal.fire({
                                    title: "El marbete ya fue capturado/validado",
                                    text: "Escanea otro marbete",
                                    icon: "error"
                                });
                            }
                        } else {
                            Swal.fire({
                                title: "El marbete no esta capturado",
                                text: "Verificalo con la mesa central",
                                icon: "error"
                            });
                        }
                    }
                }else{
                    Swal.fire({
                        title: "El marbete no esta cargado para su area o conteo / o ya fue validado",
                        text: "Ve a la mesa de control para mas informacion",
                        icon: "error"
                    });
                }
            });
        }else{
            Swal.fire({
                title: "El marbete no pertenece al conteo: "+auxConteo,
                text: "Escanea el correcto",
                icon: "error"
            });
        }


    }


    function cargaPrimer(numeroParte) {
        $.getJSON('https://grammermx.com/Logistica/Inventario/dao/consultaParte.php?parte='+numeroParte, function (data) {
            for (var i = 0; i < data.data.length; i++) {
                if (data.data[i].GrammerNo) {
                    document.getElementById('lblDescripcion').innerText = data.data[i].Descripcion;
                    document.getElementById('txtUnidadMedida').innerText = data.data[i].UM;
                    costoUnitario = data.data[i].Costo / data.data[i].Por;
                    document.getElementById('lblCosto').innerText = costoUnitario;
                    document.getElementById('lblMontoTotal').innerText = costoUnitario*cantidad;
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

    async function enviarDatos() {
        var marbete = document.getElementById("scanner_input").value;
        var nombre = document.getElementById("lblNombre").innerText;
        var cantidad = document.getElementById("txtCantidad").value;
        var cantidadAnterior = document.getElementById("lblCantidad").innerText;

        if (cantidad === cantidadAnterior || await confirmarCambio()) {
            enviarSolicitud('<?php echo $nomina;?>-'+nombre, marbete, cantidad,auxConteo);
        }
    }

    function confirmarCambio() {
        return new Promise(resolve => {
            Swal.fire({
                title: "¿Quieres guardar los cambios?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Guardar",
                denyButtonText: "No guardar"
            }).then((result) => {
                if (result.isConfirmed) {
                    resolve(true);
                } else if (result.isDenied) {
                    Swal.fire("Los cambios no se guardaron", "", "info");
                    resolve(false);
                }
            });
        });
    }

    function enviarSolicitud(nombre, marbete, cantidad,conteo) {
        var formData = new FormData();
        formData.append('nombre', nombre);
        formData.append('folioMarbete', marbete);
        formData.append('cantidad', cantidad);

        fetch('https://grammermx.com/Logistica/Inventario/dao/actualizarMarbeteProduccion.php', {
            method: 'POST',
            body: formData
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    mostrarExito();
                } else {
                    console.log("Hubo un error en la operación");
                    console.log("Las unidades de almacenamiento que fallaron son: ", data.message);
                }
            });
    }

    function mostrarExito() {
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
            if (result.dismiss === Swal.DismissReason.timer) {
                location.reload();
            }
        });
    }


    document.getElementById('scanner_input').addEventListener('keyup', function(event) {
        if (event.key === 'Enter' || event.keyCode === 13) {
            manualMarbete();
            document.getElementById('txtCantidad').focus();
        }
    });


    document.getElementById('txtCantidad').addEventListener('keyup', function(event) {
        if (event.key === 'Enter' || event.keyCode === 13) {
            document.getElementById("btnFin").scrollIntoView({behavior: "smooth"});
        }
    });
</script>
</body>
</html>