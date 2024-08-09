<?php 

include("../app/config.php");

include("../layout/Sesion.php");
include("../layout/parte1.php");
include("../app/controllers/usuarios/show.php");

?>

<div class="row mt-3 justify-content-center">

<div class="col-sm-4">

<div class="card  card-danger">
<div class="card-header">
<h3 class="card-title">Datos usuario</h3>
</div>


 <form action="../app/controllers/usuarios/deleteusuario.php" method="post">

 <div class="card-body">
<input type="text"  name="id" value="<?php echo$id;?>"hidden>

     <div class="form-group">

<label for="nombre"> Nombre</label>
<input type="text" class="form-control" name ="nombres" value="<?php echo$nombre; ?>" readonly/>

     </div>
<div class="form-group">
<label for="exampleInputEmail1">Correo</label>
<input type="email" class="form-control" name="email" value="<?php echo$email ; ?>"readonly/>

</div>

 

<div class="form-group">
    <a  href="index.php"  class="btn btn-secondary">Regresar</a>
    <input type="submit" class="btn btn-danger" value="Eliminar">

</div>

</div>



 </form>
</div>

<?php
include("../layout/parte2.php");

?>

