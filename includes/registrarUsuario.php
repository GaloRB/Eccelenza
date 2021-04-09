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

    <style>
        body{
            height: initial;
        }
        .permisosContainer{
            align-items: baseline;
            color: white;
        }
        .permisosGrade{
            margin-top: 1rem;
        }
        label {
            font-size: 1.5rem;
        }
        .permisosGrade label{
            font-size: 1rem;
        }
    </style>
</head>

<body>
    
    <?php include_once ('navAdmin.php'); ?>

<div class="text-center ">
<main class="">
    
        <!-------------- Agregar Usuario------------ -->
    
        
            <h2 class="text-center m-3"> Registrar nuevo usuario </h2> 


            <form class="container-fluid mt-5 col-md-6" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre de usuario:</label>
                        <input type="text" reuired name="nombre" id="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Escribe el nombre del nuevo usuario...">
                        
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password:</label>
                        <input type="password" reuired name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Escribe su contraseña">
                        <small id="emailHelp" class="form-text form-group-info">Maximo 8 caracteres. Al menos una mayúscula, número y carácter especial.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmar Password:</label>
                        <input type="password" reuired name="password" id="password" class="form-control" id="exampleInputPassword1" placeholder="Confirmar">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp" placeholder="name@domain.com">
                        <small id="emailHelp" class="form-text form-group-info">*Opcional</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="tipoUsuario">Tipo de usuario:</label>
                        <select class="form-select mt-2" reuired name="tipoUsuario" id="tipoUsuario" aria-label="Default select example">
                        <option value="2">Selecciona un tipo de usuario...</option>
                        <option value="0">Cliente</option>
                        <option value="3">Trabajador</option>
                        <option value="1">Administrador</option>
                    </select>
                    </div>

                    <div class="form-group">
                        <label for="tipoUsuario">Permisos</label>
                        <div class="row permisosContainer">
                            <div class="col-3 permisosGrade">
                                <label for="">Recursos Humanos</label>
                                <select class="form-select" reuired name="" id="permisosRH" aria-label="Default select example">
                                    <option value="2" selected>Ninguno</option>
                                    <option value="0">Visualizar</option>
                                    <option value="1">Editar</option>
                                </select>
                            </div>
                            <div class="col-3 permisosGrade">
                                <label for="">Inspección y Rat.</label>
                                <select class="form-select" reuired name="" id="permisosInspeccion" aria-label="Default select example">
                                    <option value="2" selected>Ninguno</option>
                                    <option value="0">Visualizar</option>
                                    <option value="1">Editar</option>
                                </select>
                            </div>
                            <div class="col-3 permisosGrade">
                                <label for="">Representación</label>
                                <select class="form-select" reuired name="" id="permisosRepresentación" aria-label="Default select example">
                                    <option value="2" selected>Ninguno</option>
                                    <option value="0">Visualizar</option>
                                    <option value="1">Editar</option>
                                </select>
                            </div>
                            <div class="col-3 permisosGrade">
                                <label for="">Ventas</label>
                                <select class="form-select" reuired name="" id="permisosVentas" aria-label="Default select example">
                                    <option value="2" selected>Ninguno</option>
                                    <option value="0">Visualizar</option>
                                    <option value="1">Editar</option>
                                </select>
                            </div>
                            <div class="col-3 permisosGrade">
                                <label for="">Compras</label>
                                <select class="form-select" reuired name="" id="permisosCompras" aria-label="Default select example">
                                    <option value="2" selected>Ninguno</option>
                                    <option value="0">Visualizar</option>
                                    <option value="1">Editar</option>
                                </select>
                            </div>
                            <div class="col-3 permisosGrade">
                                <label for="">Instrucción de trabajo</label>
                                <select class="form-select" reuired name="" id="permisosInstrucciones" aria-label="Default select example">
                                    <option value="2" selected>Ninguno</option>
                                    <option value="0">Visualizar</option>
                                    <option value="1">Editar</option>
                                </select>
                            </div>
                            <div class="col-3 permisosGrade">
                                <label for="">Almacenamiento</label>
                                <select class="form-select" reuired name="" id="permisosAlmacenamiento" aria-label="Default select example">
                                    <option value="2" selected>Ninguno</option>
                                    <option value="0">Visualizar</option>
                                    <option value="1">Editar</option>
                                </select>
                            </div>
                            <div class="col-3 permisosGrade">
                                <label for="">No confirmados</label>
                                <select class="form-select" reuired name="" id="permisosAlmacenamiento" aria-label="Default select example">
                                    <option value="2" selected>Ninguno</option>
                                    <option value="0">Visualizar</option>
                                    <option value="1">Editar</option>
                                </select>
                            </div>
                            <div class="col-3 permisosGrade">
                                <label for="">Satisfacción la cliente</label>
                                <select class="form-select" reuired name="" id="permisosAlmacenamiento" aria-label="Default select example">
                                    <option value="2" selected>Ninguno</option>
                                    <option value="0">Visualizar</option>
                                    <option value="1">Editar</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <button type="submit" name="registrar" id="registrar" class="btn btn-primary mt-3 mb-4">Registrar</button>
                    <!-- Div de alerta en casi de datos incorrectos -->
                    <div class="mt-2 invisible none" id="answer">
                        <div id="alertForm" class="alert alert-danger text-center" role="alert">

                        </div>
                    </div>
            </form>
            

</main>
</div>
    
   
   

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
 <script src="../js/scriptsRegistrarUsuario.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
</body>

</html>

<?php
    }
?>    