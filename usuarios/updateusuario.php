
   
<!-- recordar esta seccion dse php para los mensajes de sesion  debe ir primero  -->
<?php  

include('../app/config.php');
include('../layout/Sesion.php');
include('../layout/parte1.php');
include('../app/controllers/usuarios/updateusuario.php');
// inicializamos las variables
?>

<div class="row mt-3 justify-content-center">

<div class="col-sm-4">

<div class="card card-success">
<div class="card-header   mt-1">
<h3 class="card-title">Edicion de usuarios</h3>
</div>


<form action="../app/controllers/usuarios/update.php" method="post">
<div class="card-body">

<div class="form-group">
<label for="id_get"></label>
<input  type="text" class="form-control" name="id_get"value="<?php echo $id_get ?>" hidden>


</div>
     <div class="form-group">

<label for="nombre"> Nombre</label>
<input type="text" class="form-control" name ="nombres" placeholder="nombre"  value="<?php echo $nombres;?>"required>

     </div>
<div class="form-group">
<label for="exampleInputEmail1">Correo</label>
<input type="email" class="form-control" name="email"  placeholder="ingrese su correo" value="<?php echo $email;?>" required>

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
    <a  href="index.php"  class="btn btn-secondary">cancelar</a>
<input type="submit"  class="btn btn-success"value ="Actualizar">

</div>

</div>



<?php  
include('../layout/mensajes.php');
include('../layout/parte2.php') ;


?>