   
   <!-- libreria de swalert -->
   
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
   
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
   <h3 class="card-title">Creacion de roles </h3>
   </div>
   
   
   <form action="../app/controllers/roles/create.php" method="post">
   <div class="card-body">
   <div class="form-group">
   <label for="id_rol">Rol id </label>
   <input type="text" class="form-control" name="id_rol" placeholder="Ingrese el id del rol " required>
   </div>

        <div class="form-group">
   
   <label for="rol"> Nombre</label>
   <input type="text" class="form-control" name ="rol" placeholder="rol" required>
     </div>
   
   <div class="form-group">
       <a  href="index.php"  class="btn btn-secondary">cancelar</a>
   <input type="submit"  class="btn btn-primary"value ="Registrar">
   
   </div>
   
   </div>
   
   
   </form>     
   </div>
   
   
    
   
   
   
   
   <!-- ./wrapper -->
   
   <?php
   
   include('../layout/mensajes.php');
    include('../layout/parte2.php');
   ?>