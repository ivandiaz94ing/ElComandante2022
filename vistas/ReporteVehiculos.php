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
                <h1><i class="fa fa-edit"></i>Gestionar Vehiculos</h1>
            </div>
            <a class="btn btn-primary icon-btn" data-toggle="modal" data-target="#modalAddUsuario"><i class="fa fa-plus "></i>Nuevo Vehiculo</a>
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
                        <h4>Actualizar Vehiculo</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmEmpleadoU">
                                    <input type="text" hidden="" id="placaU" name="placaU">

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label class="control-label">Propietario del Vehiculo:</label>
                                            <?php include "SelectPropietarioU.php"; ?>
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Marca:</label>
                                            <input class="form-control" id="marcaU" name="marcaU" type="text" placeholder="*Ingrese Marca del Vehiculo" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Color:</label>
                                            <input class="form-control" id="colorU" name="colorU" type="text" placeholder="*Ingrese Corlor del Vehiculo" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <?php include "SelectCategoriaU.php"; ?>
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
                        <h4 class="modal-title">Registrar Nuevo Vehiculo</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmVehiculo" onsubmit="return agregarNuevo()">

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <?php include "SelectPropietario.php"; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Placa:</label>
                                            <input class="form-control" id="placa" name="placa" type="text" placeholder="*Ingrese Placa del Vehiculo" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <?php include "SelectCategoria.php"; ?>
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Marca:</label>
                                            <input class="form-control" id="marca" name="marca" type="text" placeholder="*Ingrese Marca del Vehiculo" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Color:</label>
                                            <input class="form-control" id="color" name="color" type="text" placeholder="*Ingrese Corlor del Vehiculo" required="required">
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

</body>

</html>
<?php include "../librerias/script.php"; ?>
<script type="text/javascript" src="../js/select2.min.js"></script>
<script src="../js/funcionesVehiculo.js"></script>