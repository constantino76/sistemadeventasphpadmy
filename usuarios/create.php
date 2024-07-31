   
   <!-- libreria de swalert -->
   
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
   
<!-- recordar esta seccion dse php para los mensajes de sesion  debe ir primero  -->
<?php  

include('../app/config.php');
include('../layout/Sesion.php');
include('../layout/parte1.php');
// inicializamos las variables

//session_start();
if (isset($_SESSION['mensaje'])){
     $mensaje_=$_SESSION['mensaje'];
     $icono_=$_SESSION['icono'];
     $titulo=$_SESSION['titulo'];
?>
  <script>
// imprimimos el mensaje
Swal.fire({
  title: "<?php echo$titulo;?>",
  text: "<?php  echo$mensaje_;?> ",
 icon: "<?php echo$icono_;  ?>" }
);
  </script>
<?php
//terminamos  las sesiones en especifico mensaje e icono 
unset($_SESSION['mensaje']);
unset($_SESSION['icono']);
}
?>

<div class="row mt-3 justify-content-center">

<div class="col-sm-4">

<div class="card  card-primary">
<div class="card-header">
<h3 class="card-title">Registro de usuarios</h3>
</div>


<form action="../app/controllers/usuarios/create.php" method="post">
<div class="card-body">
     <div class="form-group">

<label for="nombre"> Nombre</label>
<input type="text" class="form-control" name ="nombres" placeholder="nombre" required>

     </div>
<div class="form-group">
<label for="exampleInputEmail1">Correo</label>
<input type="email" class="form-control" name="email" placeholder="ingrese su correo" required>

</div>
<div class="form-group">
<label for="contrasenia">Contrasenia</label>
<input type="password" class="form-control" name="password_user" placeholder="Ingrese su contrasenia " required>
</div>

<div class="form-group">
<label> Repita la contrasenia</label>
<input type="password" class="form-control" name="password_repeat" required> 

</div>
<div class="form-group">
    <a  href="index.php"  class="btn btn-default">cancelar</a>
<input type="submit"  class="btn btn-secondary"value ="registrar">

</div>

</div>


</form>     
</div>


 




<!-- ./wrapper -->

<?php
 include('../layout/parte2.php');
?>