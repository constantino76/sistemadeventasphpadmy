   
  
   
<!-- recordar esta seccion dse php para los mensajes de sesion  debe ir primero  -->
<?php  

include('../app/config.php');
include('../layout/Sesion.php');
include('../layout/parte1.php');
include('../app/controllers/roles/list_roles.php');
// inicializamos las variables
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

<div class="form-group ">

<label for="rol" class="bg-danger">Selecciona tu rol:</label>
    <select name="rol" id="rol" class="form-control bg-dark">
      <?php 
         foreach($listado_roles as $rol){  ?>

<option value="<?php echo$rol['id_rol'] ?>"> <?php echo$rol['rol'] ?></option>
<?php
    
         }
        ?>
      
    </select>
</div>

<div class="form-group">
    <a  href="index.php"  class="btn btn-secondary">cancelar</a>
<input type="submit"  class="btn btn-primary"value ="registrar">

</div>

</div>


</form>     
</div>


 




<!-- ./wrapper -->

<?php

include('../layout/mensajes.php');
 include('../layout/parte2.php');
?>