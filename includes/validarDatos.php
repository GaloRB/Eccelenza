<?php
// crear pass con hash
// echo password_hash('Dani123el',PASSWORD_BCRYPT);

function validarUsuario(){
    include('conection.php');
    session_start();

    
        $usuario = $_POST['user'];
        $password = $_POST['pass'];
        
        $query = "SELECT * FROM usuarios WHERE Nombre ='$usuario'";
        $result = mysqli_query($conn,$query);
        
    
        if(mysqli_num_rows($result)>0){
            while($row=mysqli_fetch_array($result)){
                   $rolUsuario = $row['Tipo_U'];
                   $password_hash = $row['Contrasena'];
                }
            if($rolUsuario == 1){
                verifyAdmin($password,$password_hash,$rolUsuario,$usuario);
            }else{
                verifyClient($password,$password_hash,$rolUsuario,$usuario);
            }
            
        }else{
          echo json_encode(array('data'=> 0));
        }
}

function verifyAdmin($password,$password_hash,$rolUsuario,$usuario){
    if(password_verify($password,$password_hash) && $rolUsuario == 1){
        $_SESSION["admin"]= true;
        $_SESSION["nombre"]= $usuario;
        echo json_encode(array('data'=> 1));
    }else {
        echo json_encode(array('data'=> 0));
    }
}

function verifyClient($password,$password_hash,$rolUsuario,$usuario){
    if(password_verify($password,$password_hash) && $rolUsuario == 0){
        $_SESSION["client"]= true;
        $_SESSION["nombre"]= $usuario;
        echo json_encode(array('data'=> 2));
    }else {
        echo json_encode(array('data'=> 0));
    }
}

if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) && !empty($_POST['pass'])){
    validarUsuario();
}

?>