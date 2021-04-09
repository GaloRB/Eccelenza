<nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
        
            
            <img class="mb-4" <?php echo $ruta = basename($_SERVER['PHP_SELF']) == 'homeClient.php' ? 'src="img/logo.png"' : 'src="../img/logo.png"'; ?> alt="" width="170">    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse mx-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page"<?php echo $ruta = basename($_SERVER['PHP_SELF']) == 'homeClient.php' ? 'href="homeClient.php"' : 'href="../homeClient.php"'; ?>>Inicio</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Reportes de representación
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                
                    <li><a class="dropdown-item" <?php echo $ruta = basename($_SERVER['PHP_SELF']) == 'homeClient.php' ? 'href="Forms/chcecklistIspeccion.php"' : 'href="Forms/chcecklistIspeccion.php"'; ?>>Check List De Inspección</a></li>
                    <li><a class="dropdown-item" <?php echo $ruta = basename($_SERVER['PHP_SELF']) == 'homeClient.php' ? 'href="Forms/nonconformity_material_notification.php"' : 'href="../Forms/nonconformity_material_notification.php"'; ?>>No conformidad</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" <?php echo $ruta = basename($_SERVER['PHP_SELF']) == 'homeClient.php' ? 'href="Forms/reporte_semanal.php"' : 'href="../Forms/reporte_semanal.php"'; ?>>Reporte semanal</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="../forms/reporte_semanal.php">Opcion</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active text-center text-dark h6" aria-current="page" <?php echo $ruta = basename($_SERVER['PHP_SELF']) == 'homeClient.php' ? 'href="includes/sesion.php"' : 'href="../includes/sesion.php"'; ?>>Salir</a>
                </li>
            </ul>
            
            </div>
            <div class="navbar-name">
                <p>Bienvenido <?php echo $_SESSION["nombre"]; ?> </p>
                <p><strong>Cliente</strong></p> 
            </div>   
        </div>
    </nav>