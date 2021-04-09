<?php
    session_start();
    if(isset($_SESSION["admin"]) || isset($_SESSION["client"])){
		session_destroy();
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

    <title>Eccelenza login</title>
</head>

<body class="text-center align-items-center d-flex justify-content-center">
    <main class="form-signin">
        <form method="POST">
            <img class="mb-4" src="img/logo.png" alt="" width="170">
            <h1 class="h3 mb-3 fw-normal">Inicia seción</h1>

            <div class="form-floating">
                <input type="text" class="form-control" name="user" id="user" required placeholder="user">
                <label for="floatingInput">Usuario</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="pass" id="pass" required placeholder="Password">
                <label for="floatingPassword">contraseña</label>
            </div>

            <!-- Div de alerta en casi de datos incorrectos -->
            <div class="mt-2 invisible none" id="answer">
                <div id="alertForm" class="alert alert-danger text-center" role="alert">

                </div>
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" id="sign-in">Ingresar</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>

<?php
	}
?>	