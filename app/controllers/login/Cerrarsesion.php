<?php
echo"cerrar sesion";
 include('../../config.php');

  session_start();

 if(isset($_SESSION['sesion_email'])){

       session_destroy();
   header('Location:'.$URL.'/login');
    
 }
?>