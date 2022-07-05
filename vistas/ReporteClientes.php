<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include "../librerias/head.php"; ?>

<body class="app sidebar-mini">
    <?php include "../librerias/header.php"; ?>
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <?php include "../librerias/menuaside.php"; ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-edit"></i>Gestionar Clientes</h1>
            </div>
                <a class="btn btn-primary icon-btn" data-toggle="modal" data-target="#modalAddUsuario"><i class="fa fa-plus "></i>Nuevo Cliente</a>
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
                        <h4>Actualizar Cliente</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmEmpleadoU">
                                    <input type="text" hidden="" id="cedulaU" name="cedulaU">



                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="control-label">Tipo de Cliente:</label>
                                            <select class="form-control" id="Tipo_ClineteU" name="Tipo_ClineteU" required="required">
                                                <option value="">--Seleccione Un tipo de Cliente--</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Frecuente">Frecuente</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Telefono:</label>
                                            <input class="form-control" id="telefonoU" name="telefonoU" type="text" placeholder="*Ingrese el numero de Telefono" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Nombres:</label>
                                            <input class="form-control" id="nombresU" name="nombresU" type="text" placeholder="*Ingrese los nombres" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Apellidos:</label>
                                            <input class="form-control" id="apellidosU" name="apellidosU" type="text" placeholder="*Ingrese los apellidos" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Direccion:</label>
                                            <input class="form-control" id="direccionU" name="direccionU" type="text" placeholder="*Ingrese la direccion" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Barrio:</label>
                                            <input class="form-control" id="barrioU" name="barrioU" type="text" placeholder="*Ingrese el barrio" required="required">
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
                        <h4 class="modal-title">Registrar Nuevo Cliente</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmEmpleado" onsubmit="return agregarNuevo()">
                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Identificación:</label>
                                            <input class="form-control" id="cedula" name="cedula" type="text" placeholder="*Ingrese la Identificación" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Telefono:</label>
                                            <input class="form-control" id="telefono" name="telefono" type="text" placeholder="*Ingrese el numero de Telefono" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Nombres:</label>
                                            <input class="form-control" id="nombres" name="nombres" type="text" placeholder="*Ingrese los nombres" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Apellidos:</label>
                                            <input class="form-control" id="apellidos" name="apellidos" type="text" placeholder="*Ingrese los apellidos" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Direccion:</label>
                                            <input class="form-control" id="direccion" name="direccion" type="text" placeholder="*Ingrese la direccion" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Barrio:</label>
                                            <input class="form-control" id="barrio" name="barrio" type="text" placeholder="*Ingrese el barrio" required="required">
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
    <script src="../js/funcionesClinete.js"></script>
</body>

</html>