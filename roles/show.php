<?php 

include("../app/config.php");

include("../layout/Sesion.php");
include("../layout/parte1.php");
include("../app/controllers/roles/show.php");

?>

<div class="row mt-3 justify-content-center">

<div class="col-sm-4">

<div class="card  card-primary">
<div class="card-header">
<h3 class="card-title">Datos rol</h3>
</div>



<div class="card-body">
     <div class="form-group">

<label for="nombre"> Nombre Rol</label>
<input type="text" class="form-control" name ="nombres" value="<?php echo$rol; ?>" readonly/>

     </div>



     <div class="form-group">
    <a  href="index.php"  class="btn btn-secondary">Regresar</a>
</div>

  


</div>


<?php
include("../layout/mensajes.php");
include("../layout/parte2.php");

?>

