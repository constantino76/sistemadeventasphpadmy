   
  
   
<!-- recordar esta seccion dse php para los mensajes de sesion  debe ir primero  -->
<?php  

include('../app/config.php');
include('../layout/Sesion.php');
include('../layout/parte1.php');
// inicializamos las variables
?>

<div class="row mt-3 justify-content-center">

<div class="col-sm-4">

<div class="card  card-primary">
<div class="card-header">
<h3 class="card-title">Registro de Categorias</h3>
</div>


<form action="../app/controllers/categorias/create.php" method="post">
<div class="card-body">
     <div class="form-group">

<label for="nombre"> Nombre</label>
<input type="text" class="form-control" name ="nombre_categoria" placeholder="nombre" required>

     </div>





<div class="form-group ">



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