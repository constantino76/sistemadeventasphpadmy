
<?php
  
  include('../app/config.php');
   include('../layout/Sesion.php');
   include('../layout/parte1.php');
   include('../app/controllers/usuarios/listusuarios.php')
  
 
?>
  
   
  

    <!-- Main content -->
    <div class=" row justify-content-center mt-4 bl-2">
       
      <div class="col-md-8">
      <h3> Usuarios</h3>
    <table class="table  table-bordered table-striped table-hover">
      
  <thead class="bg-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombres </th>
      <th scope="col">Email</th>
    
    </tr>
    </thead>
    
  
  <tbody class="card-body">

    <?php  
     foreach( $listado_usuarios as $user ){

    ?>
<tr>
     <td><?php echo$user['id_usuario'];?></td>
     <td><?php echo$user['nombres'];?></td>
     <td><?php echo $user['email'];?></td> 
</tr>

<?php  

     }
    
    
    
    ?>
    
  </tbody>
</table>
</div>
</div>
      
<!-- ./wrapper -->

<?php
 include('../layout/parte2.php');
?>

