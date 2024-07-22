
<!-- libreria de swealert -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<?php 


session_start();
if(isset($_SESSION['sesion_email'] )){
  $email=$_SESSION['sesion_email']; 
  $sql = "SELECT * FROM tb_usuarios WHERE email = '$email' ";
  $query = $pdo->prepare($sql);
  $query->execute();

  $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario){
    
    
    $nombres = $usuario['nombres'];
  
}
  $usuario=$nombres;
  ?>
<script>
Swal.fire({
  title: "",
  text: "<?php echo"Bienvenido".$usuario ; ?>",
  icon: "success"
});


</script>

 <?php
}
else{

  //redireccionamos al login
  header('Location:'.$URL.'/login/index.php');
 /* echo"no existe la sesion" ;
  header('Location: '.$URL.'/login'); */
  
}
?>