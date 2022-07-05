<?php
session_start();
require_once "../../bd/conexion.php";
$obj = new conectar();
$conexion = $obj->conexion();
$sql = "SELECT v.placa, v.marca, 
    v.color, c.nombre,
    CONCAT(p.cedula,' - ',p.nombres, ' ', p.apellidos) 
    FROM `vehiculo`  v 
    INNER JOIN `categoria` c ON (c.idCategoria = v.idCategoria)
    INNER JOIN `cliente` p ON (p.cedula = v.idCliente); ";
$result = mysqli_query($conexion, $sql);
?>
<div class="table-responsive">
    <table id="iddatatable" class="table table-striped table-bordered table-condensed" style="width:100%">
        <thead class='text-center'>
            <tr>
                <th>PLACA </th>
                <th>MARCA</th>
                <th>COLOR</th>
                <th>TIPO</th>
                <th>PROPIETARIO</th>
                <th>EDITAR</th>
                <?php
                if ($_SESSION['rol'] == "Administrador") {
                ?>
                    <th>ELIMINAR</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php while ($mostrar = mysqli_fetch_row($result)) { ?>
                <tr>
                    <td><?php echo $mostrar[0] ?></td>
                    <td><?php echo $mostrar[1] ?></td>
                    <td><?php echo $mostrar[2] ?></td>
                    <td><?php echo $mostrar[3] ?></td>
                    <td><?php echo $mostrar[4] ?></td>
                    <td>
                        <div class='text-center'>
                            <span class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalCRUDX" onclick="agregaFrmActualizarU('<?php echo $mostrar[0] ?>')">
                                <span class="fa fa-pencil-square-o"></span>
                            </span>
                        </div>
                    </td>
                    <?php
                    if ($_SESSION['rol'] == "Administrador") {
                    ?>
                        <td>
                            <div class='text-center'>
                                <span class="btn btn-danger btn-sm" onclick="eliminarDatos('<?php echo $mostrar[0] ?>')">
                                    <span class="fa fa-trash"></span>
                                </span>
                            </div>
                        </td>
                    <?php } ?>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#iddatatable').DataTable({
                    language: {
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        },
                        "oAria": {
                            "sSortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    }

                });
            });
        </script>