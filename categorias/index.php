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
              $id_categoria = $categoria['id_categoria'];
              $nombre_categoria = $categoria['nombre_categoria'];

            ?>

<tr>
              <td><?php echo $contador; ?></td>
              <td><?php echo $categoria['nombre_categoria']; ?> </td>
            
                <td>
                  <div class="btn-group justify-content-center pl-3">
                    <a href="show.php?id=<?php echo $id_categoria; ?>" type="button" class="btn btn-info"><i class="fa fa-eye">Ver</i></a>

                    <button type="button" class="btn btn-success " data-toggle="modal" data-target="#modal-update<?php echo $id_categoria ?>">
                    <i class="bi bi-pencil-square"></i>
                      Actualizar categoria
                    </button>
                    <a href="delete.php?id=<?php echo $idcategoria; ?>" type="button" class="btn btn-danger pl-1">
                            <i class="bi bi-trash"></i> Eliminar</a>
                    <!-- modal para actualizar categorias -->
                    <div class="modal fade" id="modal-update<?php echo $id_categoria; ?>">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header" style="background-color: #116f4a;color: white">
                            <h4 class="modal-title">Actualización de la categoría</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="">Nombre de la categoría</label>
                                  <input type="text" id="nombre_categoria<?php echo $id_categoria; ?>" value="<?php echo $nombre_categoria; ?>" class="form-control">
                                  <small style="color: red;display: none" id="lbl_update<?php echo $id_categoria; ?>">* Este campo es requerido</small>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success" id="btn_update<?php echo $id_categoria; ?>">Actualizar</button>
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                    <!-- /.modal -->
                    <script>
                      $('#btn_update<?php echo $id_categoria; ?>').click(function() {
                        alert("hola");
                        var nombre_categoria = $('#nombre_categoria<?php echo $id_categoria; ?>').val();
                        var id_categoria = '<?php echo $id_categoria; ?>';

                        if (nombre_categoria == "") {
                          $('#nombre_categoria<?php echo $id_categoria; ?>').focus();
                          $('#lbl_update<?php echo $id_categoria; ?>').css('display', 'block');
                        } else {
                          var url = "../app/controllers/categorias/update.php";
                          $.get(url, {
                            nombre_categoria: nombre_categoria,
                            id_categoria: id_categoria
                          }, function(datos) {
                            $('#respuesta_update<?php echo $id_categoria; ?>').html(datos);
                          });
                        }
                      });
                    </script>
                    <div id="respuesta_update<?php echo $id_categoria; ?>"></div>
                  </div>

                </td>


      </div>


      <!-- fin  -->









      </a>
     
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
include('../layout/mensajes.php');
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
      <div class="modal-header" style="background-color:blue; color:white">
        <h4 class="modal-title">Registro de categoria</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="card-body">
          <div class="form-group">

            <label for="nombre"> Nombre</label>
            <input type="text" class="form-control" id="nombre_categoria" placeholder="nombre" required>

          </div>
        </div>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary" id="registro">Registrar</button>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>




<script>
  $('#registro').click(function() {


    var nombre_categoria = $('#nombre_categoria').val();


    if (nombre_categoria.trim() == '') {
      alert('el nombre de la categoria no debe estar vacio');
      return;



    }
    var url = "../app/controllers/categorias/create.php";
    $.get(url, {
      nombre_categoria: nombre_categoria
    }, function(datos) {

      $('#respuesta').html(datos);



    });

  });
</script>