<?php
    session_start();
    if(!isset($_SESSION["admin"])){
        header("Location:index.php");
    }else{
       
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login-style.css">

    <title>Administrador</title>
</head>

<body>
    
    <?php include_once ('navAdmin.php'); ?>

<div class="text-center ">
<main class="">
    
        <!-------------- Agregar Usuario------------ -->
    
        
            <h2 class="text-center m-3">Eliminar usuario </h2> 


            <form class="container-fluid mt-5 col-md-6" method="POST">
                   
                    <label for="tipoUsuario">Usuario a eliminar:</label>
                    <select class="form-select mt-2" reuired name="usuario" id="usuario" aria-label="Default select example">
                        <option value="2">Seleccionar usuario</option>
                        <?php
                        include ('validarDatos.php');
                        usuariosParaEliminar();
                        ?>
                    </select>
                    
                    <button type="submit" name="eliminar" id="eliminar" class="btn btn-primary mt-3">Eliminar</button>
                    <!-- Div de alerta en casi de datos incorrectos -->
                    <div class="mt-2 invisible none" id="answer">
                        <div id="alertForm" class="alert alert-danger text-center" role="alert">

                        </div>
                    </div>
            </form>
            

</main>
</div>
    
   
   

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 <script src="../js/scriptsEliminarUsuario.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
</body>

</html>

<?php
    }
?>    