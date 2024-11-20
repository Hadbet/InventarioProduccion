
<?php
session_start();

if ($_SESSION["nominaCurso"] == "" && $_SESSION["nominaCurso"]== null && $_SESSION["rol"]== "" && $_SESSION["rol"]== null) {
    echo "<META HTTP-EQUIV='REFRESH' CONTENT='1; URL=login.html'>";
    session_destroy();
}else{
    session_start();
    $rol =$_SESSION['rol'];
    $area =$_SESSION['area'];
    $areaNombre =$_SESSION['AreaNombre'];
    $bin =$_SESSION['StBin'];
}

if ($areaNombre!='N/A' || $areaNombre!='' || $areaNombre!=null){
    if ($rol==1){
        $captura = '<ul class="collapse list-unstyled pl-4 w-100" id="contact">
                    <a class="nav-link pl-3" href="form_registro_produccion.php"><span class="ml-1">Captura Produccion</span></a>
                </ul>';
    }

    if($rol==5){
        $captura = '<ul class="collapse list-unstyled pl-4 w-100" id="contact">
                    <a class="nav-link pl-3" href="form_validacion_produccion.php"><span class="ml-1">Verificacion Produccion</span></a>
                </ul>';
    }

}else{
    $captura ='<ul class="collapse list-unstyled pl-4 w-100" id="contact">
                    <a class="nav-link pl-3" href="form_registro.php"><span class="ml-1">Captura Almacen</span></a>
                </ul>';
}
?>

<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
        <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
</nav>
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
        <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
        <!-- nav bar -->
        <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="inicio.php">
                <img src="assets/images/Grammer_Logo.ico" style="width: 30%">
            </a>
        </div>

        <?php
        if ($rol==4){
            echo '<p class="text-muted nav-heading mt-4 mb-1">
            <span>Administración</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-credit-card fe-16"></i>
                    <span class="ml-3 item-text">Inicio</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="forms">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="inicio.php"><span class="ml-1 item-text">DashBoard</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="crear_user.php"><span class="ml-1 item-text">Usuarios</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="crear_user.php"><span class="ml-1 item-text">Importación de tablas</span></a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-user-minus fe-16"></i>
                    <span class="ml-3 item-text">Historicos</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="tables">
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="listas_base.php"><span class="ml-1 item-text">Marbetes</span></a>
                    </li>
                </ul>
            </li>
        </ul>';
        }
        ?>

        <?php
        if($rol==1 || $rol==5){
            echo '<p class="text-muted nav-heading mt-4 mb-1">
            <span>Capturistas</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
    <i class="fe fe-smile fe-16"></i>
                    <span class="ml-3 item-text">Inicio</span>
                </a>
                
                '.$captura.'
            </li>
            <li class="nav-item dropdown">
                <a href="#support" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-compass fe-16"></i>
                    <span class="ml-3 item-text">Historicos</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="support">
                    <a class="nav-link pl-3" href="listas_marbetes.php"><span class="ml-1">Reporte</span></a>
                </ul>
            </li>
        </ul>';
        }
        ?>


        <?php
        if($rol==2){
            echo '<p class="text-muted nav-heading mt-4 mb-1">
            <span>Auditores</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#Auditor" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
    <i class="fe fe-smile fe-16"></i>
                    <span class="ml-3 item-text">Verificacion</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="Auditor">
                    <a class="nav-link pl-3" href="verificacion.php"><span class="ml-1">Escaner</span></a>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="#Historico" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-compass fe-16"></i>
                    <span class="ml-3 item-text">Historicos</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="Historico">
                    <a class="nav-link pl-3" href="listas_base.php"><span class="ml-1">Reporte</span></a>
                </ul>
            </li>
        </ul>';
        }
        ?>


        <?php
        if($rol==3){
            echo '<p class="text-muted nav-heading mt-4 mb-1">
            <span>Lider de conteo</span>
        </p>
        <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
                <a href="#Lider" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-smile fe-16"></i>
                    <span class="ml-3 item-text">Control de conteos</span>
                </a>
                <ul class="collapse list-unstyled pl-4 w-100" id="Lider">
                    <a class="nav-link pl-3" href="control_conteo.php"><span class="ml-1">Control</span></a>
                    <a class="nav-link pl-3" href="cancelacion_marbete.php"><span class="ml-1">Cancelacion</span></a>
                </ul>
            </li>
        </ul>';
        }
        ?>


        

        <div class="btn-box w-100 mt-4 mb-1">
            <a href="logout.php" target="_blank" class="btn mb-2 btn-danger btn-lg btn-block">
                <i class="fe fe-log-out fe-12 mx-2 text-white"></i><span class="small text-white">Salir</span>
            </a>
        </div>
    </nav>
</aside>

