<?php

include('../app/config.php');
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
          <thead class="bg bg-blue">
            <tr>
              <th>#</th>
              <th>Nombre</th>
              <th>Email</th>

            </tr>
          </thead>
          <tbody class="bg bg-dark">

            <?php
            $contador = 0;
            foreach ($listado_usuarios as $usuario) {
              $contador++;
            ?>

              <tr>

                <td><?php  echo $contador; ?></td>
                <td><?php  echo $usuario['nombres'] ;?></td>
                <td><?php echo $usuario['email'] ;?> </td>

              </tr>
            <?php
            }


            ?>


          </tbody>

        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->


    <?php
    include('../layout/parte2.php');
    ?>


    <script>
      
    $(function () {
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
            "responsive": true, "lengthChange": true, "autoWidth": false,
            buttons: [{
                extend: 'collection',
                text: 'Reportes',
                orientation: 'landscape',
                buttons: [{
                    text: 'Copiar',
                    extend: 'copy',
                }, {
                    extend: 'pdf'
                },{
                    extend: 'csv'
                },{
                    extend: 'excel'
                },{
                    text: 'Imprimir',
                    extend: 'print'
                }
                ]
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



<style>
    /* Tus estilos CSS aquí */
    .btn {
      background-color: #4CAF50 ;
      color: white;
      border: none;
      border-radius: 5px !important;
    }

    .btn:hover {
      background-color: gold;
    }
  </style>