


<?php include('../app/config.php');
 include('../layout/Sesion.php');
  include('../layout/parte1.php'); 
include('../app/controllers/categorias/list_categorias.php'); 

?>
   

           

  <div class="row justify-content-center mt-3">
  
    <div class="col-md-8">
      <div class="card card-secondary mt-3">
        <div class="card-header">
          <h3 class="card-title">Lista de categorias  

             <button type="button" class="btn btn-success " data-toggle="modal" data-target="#modal-create">
                 <i class="fa-fas-plus"></i> 
                 Registro de categoria
                </button>
                
                 </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="tablausuarios" class="table table-bordered table-hover table-striped">
            <thead class="bg bg-dark">
              <tr>
                <th>#</th>
                <th>Nombre Categoria</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $contador = 0;
              foreach ($listado_categorias as $categoria) {
                $contador++;
                $idcategoria = $categoria['id_categoria'];
              ?>

                <tr>
                  <td><?php echo $contador; ?></td>
                  <td><?php echo $categoria['nombre_categoria'];?></td>
                 
                  <td>
                    <div class="btn-group justify-content-center pl-3">
                      <a href="show.php?id=<?php echo $idcategoria; ?>" type="button" class="btn btn-info"><i class="fa fa-eye">Ver</i></a>

                      <a href="update.php?id=<?php echo $idcategoria; ?>" type="button" class="btn btn-success pl-1">
                        <i class="bi bi-pencil-square"></i>
                        Editar</a>
                      <a href="delete.php?id=<?php echo $idcategoria; ?>" type="button" class="btn btn-danger pl-1">
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
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Categorias",
              "infoEmpty": "Mostrando 0 a 0 de 0 Categorias",
              "infoFiltered": "(Filtrado de _MAX_Total_Categorias)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_Categorias",
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
 <!-- modal para agregar categoria -->

<div class="modal fade" id="modal-create">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Registro de categoria</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
<div class="card-body">
     <div class="form-group">

<label for="nombre"> Nombre</label>
<input type="text" class="form-control" id ="nombre_categoria" placeholder="nombre" required>

     </div>
</div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" id ="registro">Registrar</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

<!-- actualizacion de la categoria -->


<div class="modal fade" id="modal-update">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Actualizar categoria</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
<div class="card-body">
     <div class="form-group">

<label for="nombre"> Nombre</label>
<input type="text" class="form-control" id ="nombre_categoria" placeholder="nombre" required>

     </div>
</div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" id ="registro">Salvar cambios</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>

      
 <!-- fin  -->


      <script>


      $('#registro').click(function(){


      var nombre_categoria=$('#nombre_categoria').val();
      var  url="../app/controllers/categorias/create.php";
      $.get(url,{nombre_categoria:nombre_categoria},function(datos){



alert("categoria registrada");

      });

      });
        
      </script>

 