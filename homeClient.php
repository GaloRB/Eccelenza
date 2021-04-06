<?php
    session_start();
    if(!isset($_SESSION["client"])){
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
    <link rel="stylesheet" href="css/login-style.css">

    <title>Cliente</title>
</head>

<body class="text-center  d-flex justify-content-center">
    <main class="">
    <img class="mb-4" src="img/logo.png" alt="" width="170">
        <h1>Cliente</h1>

        <h2>Bienvenido <?php echo $_SESSION["nombre"]; ?> </h2>
        <p><a class="nav-link active text-center text-light h5" aria-current="page" href="includes/sesion.php">Salir</a></p>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    
</body>

</html>

<?php
    }
?>    