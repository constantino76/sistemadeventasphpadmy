<!-- esta vista sera en la que se realice la actualizacion de los datos del usuario -->


<?php
include('../../config.php');

$nombres=$_POST["nombres"]  ; 
$id_usuario= $_POST["id_get"];
 $email=$_POST["email"];
$password_user =$_POST["password_user"];
$password_repeat=$_POST["password_repeat"];
$rol=  $_POST["rol"];

if($password_user==""){

    if($password_user == $password_repeat){

        $password_user = password_hash($password_user, PASSWORD_DEFAULT);
    
        $sentencia = $pdo->prepare("UPDATE tb_usuarios
        SET nombres=:nombres,
         email=:email,
           fyh_actualizacion=:fyh_actualizacion,
           id_rol=:id_rol
            where id_usuario=:id_usuario");
    
        $sentencia->bindParam('nombres',$nombres);
        $sentencia->bindParam('email',$email);
        $sentencia->bindParam('fyh_actualizacion',$fechaHora);
        $sentencia->bindParam('id_rol',$rol);
        $sentencia->bindParam('id_usuario',$id_usuario);
        $sentencia->execute();
    
        session_start();
        $_SESSION['mensaje'] = "Se actualizo  el usuario de la manera correcta";
          $_SESSION['icono']="success";
        
     
        header('Location: '.$URL.'/usuarios');
    
    }else{
    echo "error las contraseñas no son iguales";
        session_start();
         $_SESSION['mensaje'] = "Error las contraseñas no son iguales";
         $_SESSION['icono']="error";
       header('Location: '.$URL.'/usuarios/updateusuario.php?id='.$id_usuario);
    }
    


}

  else if($password_user == $password_repeat){

    $password_user = password_hash($password_user, PASSWORD_DEFAULT);

    $sentencia = $pdo->prepare("UPDATE tb_usuarios
    SET nombres=:nombres,
     email=:email,
       password_user=:password_user, 
       fyh_actualizacion=:fyh_actualizacion,
       id_rol=:id_rol
        where id_usuario=:id_usuario");

    $sentencia->bindParam('nombres',$nombres);
    $sentencia->bindParam('email',$email);
    $sentencia->bindParam('password_user',$password_user);
    $sentencia->bindParam('fyh_actualizacion',$fechaHora);
    $sentencia->bindParam('id_rol',$rol);
    $sentencia->bindParam('id_usuario',$id_usuario);
    $sentencia->execute();

    session_start();
    $_SESSION['mensaje'] = "Se actualizo  el usuario de la manera correcta";
      $_SESSION['icono']="success";
    
 
    header('Location: '.$URL.'/usuarios');

}else{
echo "error las contraseñas no son iguales";
    session_start();
     $_SESSION['mensaje'] = "Error las contraseñas no son iguales";
     $_SESSION['icono']="error";
   header('Location: '.$URL.'/usuarios/updateusuario.php?id='.$id_usuario);
}






?>