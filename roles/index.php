


<?php include('../app/config.php');
 include('../layout/Sesion.php');
  include('../layout/parte1.php'); 
include('../app/controllers/roles/list_roles.php'); 

?>

  <div class="row justify-content-center mt-3">
    <div class="col-md-8">
      <div class="card card-secondary mt-3">
        <div class="card-header">
          <h3 class="card-title">lista de Roles </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="tablaroles" class="table table-bordered table-hover table-striped">
            <thead class="bg bg-dark">
              <tr>
                 <th>#</th> 
                <th>Numero rol</th>
                <th>Nombre</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $contador = 0;
              foreach ($listado_roles as $rol) {
                $contador++;
                $idrol = $rol['id_rol'];
              ?>

                <tr>

                <td><?php echo $contador;?></td>
                  <td><?php echo $rol['id_rol'];?></td>
                  <td><?php echo $rol['rol']; ?> </td>
                  <td>
                    <div class="btn-group justify-content-center pl-3">
                      <a href="show.php?id=<?php echo $idrol; ?>" type="button" class="btn btn-info"><i class="fa fa-eye">Ver</i></a>

                      <a href="update.php?id=<?php echo $idrol; ?>" type="button" class="btn btn-success pl-1">
                        <i class="bi bi-pencil-square"></i>
                        Editar</a>
                      <a href="delete.php?id=<?php echo $idrol; ?>" type="button" class="btn btn-danger pl-1">
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
          $("#tablaroles").DataTable({
            "pageLength": 5,
            "language": {
              "emptyTable": "No hay información",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Roles",
              "infoEmpty": "Mostrando 0 a 0 de 0 Usuarios",
              "infoFiltered": "(Filtrado de _MAX_ total Roles)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Roles",
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
          }).buttons().container().appendTo('#tablaroles_wrapper .col-md-6:eq(0)');
        });
      </script>