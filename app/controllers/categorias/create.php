<?php  


include('../../config.php');

$nombre_categoria=$_GET['nombre_categoria'];
$sentencia = $pdo->prepare("INSERT INTO tb_categorias
       ( nombre_categoria,fyh_creacion) 
VALUES (:nombre_categoria,:fyh_creacion)");

    $sentencia->bindParam('nombre_categoria',$nombre_categoria);
    $sentencia->bindParam('fyh_creacion',$fechaHora);
   
   
   
   if( $sentencia->execute() ){

   echo"registrado";
   session_start();
   $_SESSION['mensaje'] = "Se registro la categoria  de la manera correcta";
     $_SESSION['icono']="success";
   
  // header('Location: '.$URL.'/categorias');
?>
  <script>

location.href="<?php echo $URL;?>/categorias"

  </script>
<?php


}else{
  // echo "error las contraseñas no son iguales";
   session_start();
   $_SESSION['mensaje'] = "Error la categoria no se registro";
   $_SESSION['icono']="error";

   header('Location: '.$URL.'/categorias');
}

      session_start();

?>