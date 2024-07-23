   <?php
   include('../app/config.php');
    include('../layout/Sesion.php');
   include('../layout/parte1.php');?>

<div class="row mt-3 justify-content-center">

<div class="col-md-8">

<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Registro de usuarios</h3>
</div>


<form>
<div class="card-body">
     <div class="form-group">

<label for="nombre"> Nombre</label>
<input type="text" class="form-control" id ="nombre" placeholder="nombre">

     </div>
<div class="form-group">
<label for="exampleInputEmail1">Correo</label>
<input type="email" class="form-control" id="email" placeholder="ingrese su correo">

</div>
<div class="form-group">
<label for="contrasenia">Contrasenia</label>
<input type="password" class="form-control" id="contrasenia" placeholder="Ingrese su contrasenia ">
</div>



</div>

<input type="submit" value ="registrar">
</form>     
</div>


 




<!-- ./wrapper -->

<?php
 include('../layout/parte2.php');
?>