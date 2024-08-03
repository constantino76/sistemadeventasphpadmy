<?php 

include("../app/config.php");

include("../layout/Sesion.php");
include("../layout/parte1.php");
include("../app/controllers/usuarios/show.php");

?>

<div class="row mt-3 justify-content-center">

<div class="col-sm-4">

<div class="card  card-primary">
<div class="card-header">
<h3 class="card-title">Datos usuario</h3>
</div>



<div class="card-body">
     <div class="form-group">

<label for="nombre"> Nombre</label>
<input type="text" class="form-control" name ="nombres" value="<?php echo$nombre; ?>"diseable/>

     </div>
<div class="form-group">
<label for="exampleInputEmail1">Correo</label>
<input type="email" class="form-control" name="email" value="<?php echo$email ; ?>" diseable/>

</div>



<div class="form-group">
    <a  href="index.php"  class="btn btn-secondary">Regresar</a>


</div>

</div>


<?php
include("../layout/parte2.php");

?>

