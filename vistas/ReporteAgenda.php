<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="../css/select2.min.css">
<?php include "../librerias/head.php"; ?>

<body class="app sidebar-mini">
    <?php include "../librerias/header.php"; ?>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include "../librerias/menuaside.php"; ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Gestionar Agenda</h1>
            </div>
            <a class="btn btn-primary icon-btn" data-toggle="modal" data-target="#modalAddUsuario"><i class="fa fa-plus "></i>Nueva Agenda</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div id="sampleTable"></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="container">
        <div class="modal fade" id="modalCRUDX">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title"></h4>
                        <h4>Actualizar Agenda</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmEmpleadoU">
                                    <input type="text" hidden="" id="id_agendaU" name="id_agendaU">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="control-label">Fecha:</label>
                                            <input class="form-control" id="fechaU" name="fechaU" type="date" placeholder="*Ingrese Fecha" required="required">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Hora:</label>
                                            <input class="form-control" id="horaU" name="horaU" type="time" placeholder="*Ingrese Hora" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <?php include "SelectServiciosU.php"; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <?php include "SelectPropietarioU.php"; ?>
                                        </div>
                                        <div class="col-md-6">
                                        <label class="control-label">Vehiculo:</label>
                                            <input class="form-control" id="placaU" name="placaU" type="text" placeholder="*Ingrese placa del vehiculo" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                    <div class="col-md-6">
                                        <?php include "SelectEmpleadoU.php"; ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Estado:</label>
                                            <select class="form-control" id="estadoU" name="estadoU" required="required">
                                                <option value="">--Seleccione Un Estado--</option>
                                                <option value="Pendiente">Pendiente</option>
                                                <option value="En Proceso">En Proceso</option>
                                                <option value="Terminado">Terminado</option>
                                                <option value="Cancelado">Cancelado</option>
                                            </select>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="btnActualizarU" class="btn btn-success"><i class="fa fa-fw fa-lg fa-check-circle"></i>Actualizar</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="modal fade" id="modalAddUsuario">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Registrar Nueva Agenda</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmAgenda" onsubmit="return agregarNuevo()">
                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Fecha:</label>
                                            <input class="form-control" id="fecha" name="fecha" type="date" placeholder="*Ingrese la Identificación" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Hora:</label>
                                            <input class="form-control" id="hora" name="hora" type="time" placeholder="*Ingrese la edad" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <?php include "SelectServicios.php"; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <?php include "SelectPropietario.php"; ?>
                                        </div>
                                        <div class="col-md-6">
                                            <div id="selectVehiculo"></div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <?php include "SelectEmpleado.php"; ?>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Estado:</label>
                                            <select class="form-control" id="estado" name="estado" required="required">
                                                <option value="">--Seleccione Un Estado--</option>
                                                <option value="Pendiente">Pendiente</option>
                                                <option value="En Proceso">En Proceso</option>
                                                <option value="Terminado">Terminado</option>
                                                <option value="Cancelado">Cancelado</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="" id="btnGuardar" class="btn btn-success"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>
                                        <button type="button" id="btnLimpiar" class="btn btn-danger"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancelar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "../librerias/script.php"; ?>
    <script type="text/javascript" src="../js/select2.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $('#idCliente').val(0);
            recargarLista();

            $('#idCliente').change(function() {
                recargarLista();
            });
        });
    </script>
    <script type="text/javascript">
        function recargarLista() {
            $.ajax({
                type: "POST",
                url: "selectVehiculosDelCliente.php",
                data: "idCliente=" + $('#idCliente').val(),
                success: function(r) {
                    $('#selectVehiculo').html(r);
                }
            });
        }
    </script>





    <script src="../js/funcionesAgenda.js"></script>
</body>

</html>