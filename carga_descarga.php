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
      <!-- CSS -->
      <link rel="stylesheet" href="lib/sweetalert2.css">
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

              <h2 class="mb-2 page-title">Importar marbetes o Rellenar txt</h2>
              <div class="row my-4">
                <!-- Small table -->
                <div class="col-md-12">
                  <div class="card shadow">
                    <div class="card-body">
                        <button class="btn btn-secondary text-right btnExcel" id="btnExcelBitacora"> Cargar Excel Bitacora</button>
                        <input type="file" id="fileInputBitacora" accept=".xlsx, .xls" style="display: none;" />

                        <button class="btn btn-secondary text-right btnExcel" id="btnTxtBitacora"> Actualizar txt </button>
                        <input type="file" id="fileInputTxt" accept=".txt" style="display: none;" />
                      <!-- table -->
                      <table class="table datatables" id="tablaBitacora">
                        <thead>
                        <tr>
                            <th>Id_Bitacora</th>
                            <th>NumeroParte</th>
                            <th>FolioMarbete</th>
                            <th>Fecha</th>
                            <th>Usuario</th>
                            <th>Estatus</th>
                            <th>PrimerConteo</th>
                            <th>SegundoConteo</th>
                            <th>TercerConteo</th>
                            <th>Comentario</th>
                            <th>StorageBin</th>
                            <th>StorageType</th>
                            <th>Area</th>
                        </tr>
                        </thead>
                          <tbody id="bodyBitacora"></tbody>
                      </table>

                        <!-- Button trigger modal -->
                        <button style="display: none" type="button" class="btn mb-2 btn-outline-success" data-toggle="modal" data-target="#verticalModal" id="btnModal"> Launch demo modal </button>
                        <!-- Modal -->
                        <div class="modal fade" id="verticalModal" tabindex="-1" role="dialog" aria-labelledby="verticalModalTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="verticalModalTitle">Modificación de usuarios</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Id:</label>
                                            <input type="text" class="form-control" id="txtIdM" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Usuario:</label>
                                            <input type="text" class="form-control" id="txtUsuarioM">
                                        </div>
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Password:</label>
                                            <input type="password" class="form-control" id="txtPasswordM">
                                        </div>
                                        <hr>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn mb-2 btn-success text-white" onclick="actualizarDatos()">Actualizar</button>
                                        <button type="button" class="btn mb-2 btn-secondary" data-dismiss="modal" id="btnCloseM">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            //cargarDatosParte();
            //cargarDatosBin();
        });



        document.getElementById('btnTxtBitacora').addEventListener('click', () => {
            document.getElementById('fileInputTxt').click();
        });

        document.getElementById('fileInputTxt').addEventListener('change', async (event) => {
            const file = event.target.files[0]; // El archivo seleccionado
            console.log("Archivo seleccionado:", file);  // Agrega esto para verificar el archivo

            if (file) {
                // Procesar el archivo y enviar los datos al backend
                const dataToBackend = await manejarArchivo(file);
                const dataFromBackend = await enviarDatosAlBackend(dataToBackend);

                if (dataFromBackend.length > 0) {
                    // Solo actualiza si dataFromBackend tiene datos
                    actualizarContenidoArchivo(file, dataFromBackend);
                } else {
                    console.error("No se recibieron datos válidos del backend.");
                }
            } else {
                console.error("No se seleccionó ningún archivo.");
            }
        });


        async function manejarArchivo(file) {
            const reader = new FileReader();

            return new Promise((resolve, reject) => {
                reader.onload = async (event) => {
                    const contenido = event.target.result;

                    // Dividir las líneas del archivo
                    const lineas = contenido.split(/\r?\n/);

                    // Filtrar las líneas que contienen datos válidos
                    const datos = lineas
                        .map((linea) => linea.trim())
                        .filter((linea) => /^[0-9]+\s+\w+/.test(linea))
                        .map((linea) => {
                            const partes = linea.split(/\s+/);
                            return partes.length >= 6
                                ? { storBin: partes[1], materialNo: partes[5] }
                                : null;
                        })
                        .filter(Boolean);


                    // Resolvemos la promesa con los datos procesados
                    resolve(datos);
                };

                reader.onerror = (error) => {
                    reject("Error al leer el archivo: " + error);
                };

                reader.readAsText(file);
            });
        }
        async function actualizarContenidoArchivo(file, dataFromBackend) {
            const reader = new FileReader();

            reader.onload = function (event) {
                const originalContent = event.target.result;
                const originalLines = originalContent.split(/\r?\n/); // Divide el archivo en líneas

                //console.log("Contenido original del archivo:");
                //console.log(originalContent);

                const updatedLines = originalLines.map((line) => {
                    // Divide la línea en partes basándose en espacios/tabulaciones
                    const parts = line.trim().split(/\s+/);

                    if (parts.length >= 6) {
                        const storBin = parts[1]; // `storBin` es el segundo elemento
                        const materialNo = parts[5]; // `materialNo` es el sexto elemento

                        //console.log(`Procesando línea: ${line}`);
                        //console.log(`Extracted storBin: ${storBin}, materialNo: ${materialNo}`);

                        // Buscar coincidencia en dataFromBackend
                        const matchingData = dataFromBackend.find(
                            (item) => item.storBin === storBin && item.materialNo === materialNo
                        );

                        if (matchingData) {
                            //console.log(`Coincidencia encontrada para storBin: ${storBin}, materialNo: ${materialNo}`);
                            //console.log(`Reemplazando ______________ con: ${matchingData.conteoFinal}`);
                            return line.replace("______________", matchingData.conteoFinal);
                        } else {
                            //console.log(`No se encontró coincidencia para storBin: ${storBin}, materialNo: ${materialNo}`);
                        }
                    } else {
                        //console.log("Formato de línea inesperado:", line);
                    }

                    return line; // Mantener la línea sin cambios si no hay coincidencia
                });

                //console.log("Contenido actualizado del archivo:");
                //console.log(updatedLines.join("\n")); // Verifica el contenido final

                const finalContent = updatedLines.join("\n"); // Unir las líneas actualizadas
                const blob = new Blob([finalContent], { type: "text/plain" });

                const link = document.createElement("a");
                link.href = URL.createObjectURL(blob);
                link.download = `actualizado_${file.name}`;
                link.click();
            };

            //console.log("Datos del backend recibidos:");
            //console.log(JSON.stringify(dataFromBackend, null, 2)); // Verifica los datos recibidos del backend

            reader.readAsText(file);
        }


        async function enviarDatosAlBackend(data) {
            try {
                const response = await fetch('dao/daoActualizar-txt.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(data),
                });
                return await response.json(); // Devolvemos los datos procesados por el backend
            } catch (error) {
                console.error('Error enviando datos al backend:', error);
                return [];
            }
        }

    </script>

    <!-- -Archivos de jQuery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <!-- JAVASCRIPT FILES -->
    <script src="js/excel.js"></script>
    <script src="js/archivoTexto.js"></script>

    <!-- BOOSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    <!-- DataTable -->
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
  </body>
</html>