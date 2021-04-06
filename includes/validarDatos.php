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

function registrarUsuario(){
    include('conection.php');

    
        $nombre = $_POST['nombre'];
        $password = $_POST['password'];
        $TipoU = $_POST['tipoUsuario'];
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        if(buscarUsuarioRepetido($nombre,$conn) == 1){
            echo json_encode(array('data'=> 2));
        }else{
            $sql="INSERT INTO usuarios (Nombre,Contrasena,Tipo_U) VALUES ('$nombre','$password_hash','$TipoU')";
            $result=mysqli_query($conn,$sql);
            
        
            if(($result)){
                echo json_encode(array('data'=> 1));
                
            }else{
              echo json_encode(array('data'=> 0));
            }
        }
        
       
}

function buscarUsuarioRepetido($nom,$conn){

    $query ="SELECT * FROM usuarios WHERE Nombre = '$nom'";
    $resultado =mysqli_query($conn,$query);

    if(mysqli_num_rows($resultado) > 0){
        return 1;
    }else{
        return 0;
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

function consultarUsuarios(){
    include('conection.php');
    $sql="SELECT * from usuarios";
    $result=mysqli_query($conn,$sql);  
     while($row=mysqli_fetch_array($result)){
            if($row['Tipo_U'] == 1){
             $row['tipoUsuario'] = 'Administrador';
            }else{
             $row['tipoUsuario'] = "Cliente";
            }             
     echo'<tr> 
          <td>'.$row['Id_usuario'].'</td>
          <td>'.$row['Nombre'].'</td>
          <td class="text-center">'.$row['tipoUsuario'].'</td>
          
                                                           
          </tr>';
      }  
}

function usuariosParaEliminar(){
    include ('conection.php');
        $query = "SELECT * FROM usuarios";
        $result = mysqli_query($conn,$query);
        while ($usuario = mysqli_fetch_array($result)) {
            echo '<option value="'.$usuario['Id_usuario'].'">'.$usuario['Nombre'].'</option>';
        }
}

function eliminarUsuario(){
    include('conection.php');

    
    $usuario = $_POST['usuario'];
    
        $sql="DELETE FROM usuarios WHERE Id_usuario = '$usuario'";
        $result=mysqli_query($conn,$sql);
        
    
        if(($result)){
            echo json_encode(array('data'=> 1));
            
        }else{
          echo json_encode(array('data'=> 0));
        }
    
}

if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['pass']) && !empty($_POST['pass'])){
    validarUsuario();
}

if(isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['password']) && !empty($_POST['password'])){
    registrarUsuario();
}


if(isset($_POST['usuario']) && !empty($_POST['usuario'])){
    eliminarUsuario();
}

?>