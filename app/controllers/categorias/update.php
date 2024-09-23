<?php
include('../../config.php');

$nombre_categoria=$_GET["nombre_categoria"]  ; 
$id_categoria= $_GET["id_categoria"];
 

echo"Hola desde update";
    

    $sentencia = $pdo->prepare("UPDATE tb_categorias
    SET nombre_categoria=:nombre_categoria,   
       fyh_actualizacion=:fyh_actualizacion
        where id_categoria=:id_categoria");

    $sentencia->bindParam('nombre_categoria',$nombre_categoria);
    
    $sentencia->bindParam('fyh_actualizacion',$fechaHora);
    $sentencia->bindParam('id_categoria',$id_categoria);
if( $sentencia->execute()){

   

    session_start();
    $_SESSION['mensaje'] = "Se actualizo de la manera correcta  la categoria";
      $_SESSION['icono']="success";
    
  ?>

  <scrip>



location.href="<?php echo $URL;?>/categorias"



  </script>
   
    <?php

}else{

    session_start();
     $_SESSION['mensaje'] = "Error no se actualizo la categoria";
     $_SESSION['icono']="error";


     ?>
   <!-- header('Location: '.$URL.'/categorias/update.php?id='.$id_categoria); -->

   <script>

location.href="<?php echo $URL;?>/categorias"

  </script>

   <?php
}






?>