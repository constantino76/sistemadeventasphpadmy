
   
<!-- recordar esta seccion dse php para los mensajes de sesion  debe ir primero  -->
<?php  

include('../app/config.php');
include('../layout/Sesion.php');
include('../layout/parte1.php');
include('../app/controllers/roles/update_rol.php');
// inicializamos las variables
?>

<div class="row mt-3 justify-content-center">

<div class="col-sm-4">

<div class="card card-success">
<div class="card-header   mt-1">
<h3 class="card-title">Edicion de  roles</h3>
</div>


<form action="../app/controllers/roles/update.php" method="post">
<div class="card-body">
<input type="text" name="id_rol" value="<?php echo $id_get?>;" hidden>

     <div class="form-group">

<label for="rol"> Nombre del rol  asignado</label>
<input type="text" class="form-control" name ="rol" placeholder="nombre del rol"  value="<?php echo $rol;?>"required>

     </div>




<div class="form-group">
    <a  href="index.php"  class="btn btn-secondary">Cancelar</a>
<input type="submit"  class="btn btn-success"value ="Actualizar">

</div>

</div>



<?php  
include('../layout/mensajes.php');
include('../layout/parte2.php') ;


?>