
   
<!-- recordar esta seccion dse php para los mensajes de sesion  debe ir primero  -->
<?php  

include('../app/config.php');
include('../layout/Sesion.php');
include('../layout/parte1.php');
include('../app/controllers/categorias/updatecategoria.php');

// inicializamos las variables
?>

<div class="row mt-3 justify-content-center">

<div class="col-sm-4">

<div class="card card-success">
<div class="card-header   mt-1">
<h3 class="card-title">Edicion de  categorias</h3>
</div>


<form action="../app/controllers/categorias/update.php" method="post">
<div class="card-body">

<div class="form-group">
<label for="id_get"></label>
<input  type="text" class="form-control" name="id_categoria"value="<?php echo $id_get ?>" hidden>


</div>
     <div class="form-group">

<label for="nombre"> Nombre</label>
<input type="text" class="form-control" name ="nombre_categoria" placeholder="nombre"  value="<?php echo $nombres;?>"required>

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