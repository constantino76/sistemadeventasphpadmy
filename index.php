<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
<?php
   include('app/config.php');
   include('layout/Sesion.php');
   include('layout/parte1.php');

    
  
   if(isset($_SESSION['nombreusuario'])){
  $nombre= $_SESSION['nombreusuario'];


?>
<script>

Swal.fire({
  position: "top-end",
  icon: "success",
  title: "Bienvenido<?php  echo $nombre ?>;",
  showConfirmButton: false,
  timer: 1500
});

</script>

<?php


unset($_SESSION['nombreusuario']);



   }
  
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">El Sistema de ventas </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
           
              <li class="breadcrumb-item active">pagina de inicio</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
     
      <div class="container-fluid">
        <div class="row bg bg-dark">
          <div class="col-lg-6">

          </div>
        </div>
       </div>
      </div>
            
           

            

</div>
<!-- ./wrapper -->

<?php

//include('layout/mensajes.php');
 include('layout/parte2.php');
?>


