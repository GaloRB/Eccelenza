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

<div class="text-center m-5">
<main class="">
<h2>Usuarios actuales</h2>
        <table class="table table-striped table-hover">
             <thead>
                <tr>
                    <th scope="col">Clave</th>
                    <th scope="col">Nombre</th>
                    <th scope="col ">Tipo de usuario</th>
                    
                                                    
                </tr>
            </thead>
            <tbody>
                            
             <?php
              
              include ('validarDatos.php');
              consultarUsuarios();
              
                                      
            ?>                           
            </tbody>
        </table>
    </div>
    </main>
</div>
    
   
   

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</body>

</html>

<?php
    }
?>    
