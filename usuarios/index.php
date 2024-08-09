


<?php include('../app/config.php');
 include('../layout/Sesion.php');
  include('../layout/parte1.php'); 
include('../app/controllers/usuarios/listusuarios.php'); 

?>


  <div class="row justify-content-center mt-3">
    <div class="col-md-8">
      <div class="card card-secondary mt-3">
        <div class="card-header">
          <h3 class="card-title">lista de usuarios </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="tablausuarios" class="table table-bordered table-hover table-striped">
            <thead class="bg bg-dark">
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $contador = 0;
              foreach ($listado_usuarios as $usuario) {
                $contador++;
                $idusuario = $usuario['id_usuario'];
              ?>

                <tr>

                  <td><?php echo $contador; ?></td>
                  <td><?php echo $usuario['nombres'];?></td>
                  <td><?php echo $usuario['email']; ?> </td>
                  <td>
                    <div class="btn-group justify-content-center pl-3">
                      <a href="show.php?id=<?php echo $idusuario; ?>" type="button" class="btn btn-info"><i class="fa fa-eye">Ver</i></a>

                      <a href="updateusuario.php?id=<?php echo $idusuario;  ?>" type="button" class="btn btn-success pl-1">
                        <i class="bi bi-pencil-square"></i>
                        Editar</a>
                      <a href="delete.php?id=<?php echo $idusuario; ?>" type="button" class="btn btn-danger pl-1">
                        <i class="bi bi-trash"></i> Eliminar</a>
                    </div>
                  </td>
                </tr>
              <?php
              }


              ?>


            </tbody>
            <tfoot class=" bg bg-dark">
              <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Aciones</th>

              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->


      <?php
      include ('../layout/mensajes.php'); 
      include('../layout/parte2.php');
      ?>


      <script>
        $(function() {
          $("#tablausuarios").DataTable({
            "pageLength": 5,
            "language": {
              "emptyTable": "No hay información",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Usuarios",
              "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
              "infoFiltered": "(Filtrado de _MAX_ total Usuarios)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Usuarios",
              "loadingRecords": "Cargando...",
              "processing": "Procesando...",
              "search": "Buscador:",
              "zeroRecords": "Sin resultados encontrados",
              "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
              }
            },
            "responsive": true,
            "lengthChange": true,
            "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                  text: 'Copiar',
                  extend: 'copy',
                }, {
                  extend: 'pdf'
                }, {
                  extend: 'csv'
                }, {
                  extend: 'excel'
                }, {
                  text: 'Imprimir',
                  extend: 'print'
                }]
              },
              {
                extend: 'colvis',
                text: 'Visor de columnas',
                collectionLayout: 'fixed three-column'
              }
            ],
          }).buttons().container().appendTo('#tablausuarios_wrapper .col-md-6:eq(0)');
        });
      </script>