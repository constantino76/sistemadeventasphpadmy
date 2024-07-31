
<!-- libreria de swalerrt -->

<?php 
session_start();
if(isset($_SESSION['sesion_email'] )){
  $email_sesion=$_SESSION['sesion_email']; 
  $sql = "SELECT * FROM tb_usuarios WHERE email = '$email_sesion' ";
  $query = $pdo->prepare($sql);
  $query->execute();
$nombre="";
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
      $nombre = $usuario['nombres'];
} ?>

 <?php

}
else{
  
  header('Location:'.$URL.'/login/index.php');
 
}
?>