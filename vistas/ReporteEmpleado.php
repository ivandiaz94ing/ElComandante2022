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
                <h1><i class="fa fa-edit"></i>Gestionar Empleados</h1>
            </div>
            <a class="btn btn-primary icon-btn" data-toggle="modal" data-target="#modalAddUsuario"><i class="fa fa-plus "></i>Nuevo Empleado</a>
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
                        <h4>Actualizar Empleado</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmEmpleadoU">
                                <input type="text" hidden="" id="cedulaU" name="cedulaU">
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="control-label">Fecha de Registro:</label>
                                            <input class="form-control" id="fechaRegistroU" name="fechaRegistroU" disabled="">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Edad:</label>
                                            <input class="form-control" id="edadU" name="edadU" type="text" placeholder="*Ingrese la edad" required="required">
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
                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Telefon:</label>
                                            <input class="form-control" id="telefonoU" name="telefonoU" type="text" placeholder="*Ingrese el telefono" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Tipo Empleado:</label>
                                            <select class="form-control" id="tipoEmpleadoU" name="tipoEmpleadoU" required="required">
                                                <option value="">--Seleccione Estado Laboral--</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Trabajador">Trabajador</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Estado Laboral:</label>
                                            <select class="form-control" id="estadoU" name="estadoU" required="required">
                                                <option value="">--Seleccione Estado Laboral--</option>
                                                <option value="Laborando">Laborando</option>
                                                <option value="No Laborando">No Laborando</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Nacionalidad:</label>
                                            <select class="form-control" id="nacionalidadU" name="nacionalidadU" required="required">
                                                <option value="">--Seleccione Nacionalidad--</option>
                                                <option value="Colombiana">Colombiana</option>
                                                <option value="Venezolano">Venezolana</option>
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
                        <h4 class="modal-title">Registrar Nuevo Empleado</h4>
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
                                            <label class="control-label">Edad:</label>
                                            <input class="form-control" id="edad" name="edad" type="text" placeholder="*Ingrese la edad" required="required">
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
                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Telefon:</label>
                                            <input class="form-control" id="telefono" name="telefono" type="text" placeholder="*Ingrese el telefono" required="required">

                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Tipo Empleado:</label>
                                            <select class="form-control" id="tipoEmpleado" name="tipoEmpleado" required="required">
                                                <option value="">--Seleccione Estado Laboral--</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Trabajador">Trabajador</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="form-group row">

                                        <div class="col-md-6">
                                            <label class="control-label">Estado Laboral:</label>
                                            <select class="form-control" id="estado" name="estado" required="required">
                                                <option value="">--Seleccione Estado Laboral--</option>
                                                <option value="Laborando">Laborando</option>
                                                <option value="No Laborando">No Laborando</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Nacionalidad:</label>
                                            <select class="form-control" id="nacionalidad" name="nacionalidad" required="required">
                                                <option value="">--Seleccione Nacionalidad--</option>
                                                <option value="Colombiana">Colombiana</option>
                                                <option value="Venezolano">Venezolana</option>
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
    <script src="../js/funcionesEmpleado.js"></script>
</body>

</html>