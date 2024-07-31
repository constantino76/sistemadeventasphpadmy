<?php

 include('../../config.php');

  session_start();

 if(isset($_SESSION['sesion_email'])){
  echo"si existe la sesion";
       session_destroy();
   header('Location:'.$URL.'/login');
    
 }
 else{


  echo"no existe la sesion";
 }
?>