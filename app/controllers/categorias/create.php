<?php  


include('../../config.php');

$nombre_categoria=$_POST['nombre_categoria'];
$sentencia = $pdo->prepare("INSERT INTO tb_categorias
       ( nombre_categoria,fyh_creacion) 
VALUES (:nombre_categoria,:fyh_creacion)");

    $sentencia->bindParam('nombre_categoria',$nombre_categoria);
    $sentencia->bindParam('fyh_creacion',$fechaHora);
   
   
   
   if( $sentencia->execute() ){


   session_start();
   $_SESSION['mensaje'] = "Se registro al usuario de la manera correcta";
     $_SESSION['icono']="success";
   
   header('Location: '.$URL.'/categorias');

}else{
  // echo "error las contraseñas no son iguales";
   session_start();
   $_SESSION['mensaje'] = "Error las contraseñas no son iguales";
   $_SESSION['icono']="error";

   header('Location: '.$URL.'/categorias/create.php');
}

      session_start();

?>