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

                <h1><i class="fa fa-edit"></i>Gestionar Usuarios</h1>
            </div>
            <?php
            if ($_SESSION['rol'] == "Administrador") {
            ?>
                <a class="btn btn-primary icon-btn" data-toggle="modal" data-target="#modalAddUsuario"><i class="fa fa-plus "></i>Nuevo Usuario</a>
            <?php } ?>
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
                        <h4>Actualizar Rol Usuario</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmHojaDeVidaU">
                                    <input type="text" hidden="" id="idUsuarioU" name="idUsuarioU">

                                    <div class="form-group row">
                                        <label class="control-label col-md-2">USUARIO:</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="usuarioU" name="usuarioU" type="text" placeholder="*Ingrese nombre de usuario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" required="required" minlength="5" maxlength="20" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-2">E-MAIL:</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="correoU" name="correoU" type="email" placeholder="*Ingrese correo electrónico" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-2">CONSTRASEÑA:</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="claveU" name="claveU" type="password" placeholder="*Ingrese constraseña" minlength="5" maxlength="12" required="required">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="control-label col-md-2">ROL:</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="rolU" name="rolU" required="required">
                                                <option value="">--Seleccione un Rol--</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Cliente">Cliente</option>
                                            </select>
                                        </div>
                                    </div>
                                    <?php
                                    if ($_SESSION['rol'] == "Administrador") {
                                    ?>
                                        <div class="form-group row">
                                            <label class="control-label col-md-2">ESTADO:</label>
                                            <div class="col-md-10">
                                                <select class="form-control" id="estadoU" name="estadoU" required="required">
                                                    <option value="">--Seleccione un Estado--</option>
                                                    <option value="Activo">Activo</option>
                                                    <option value="Inactivo">Inactivo</option>
                                                </select>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
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
                        <h4 class="modal-title">Registrar Nuevo Usuario</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmUsuario" onsubmit="return agregarNuevo()">
                                    <hr>

                                    <div class="form-group row">
                                        <label class="control-label col-md-2">USUARIO:</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="usuario" name="usuario" type="text" placeholder="*Ingrese nombre de usuario" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" required="required" minlength="5" maxlength="20" title="Solamente se admiten caracteres">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-2">E-MAIL:</label>
                                        <div class="col-md-10">
                                            <input class="form-control" id="correo" name="correo" type="email" placeholder="*Ingrese correo electrónico" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-2">CONSTRASEÑA:</label>
                                        <div class="col-md-10">
                                            <input type="password" class="form-control" id="clave" name="clave" placeholder="*Ingrese constraseña" minlength="5" maxlength="12" required="required">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="control-label col-md-2">ROL:</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="rol" name="rol" required="required">
                                                <option value="">--Seleccione un Rol--</option>
                                                <option value="Administrador">Administrador</option>
                                                <option value="Cliente">Cliente</option>

                                            </select>
                                        </div>
                                    </div>

                                    <br>
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
    <script src="../js/FuncionesUsuarios.js"></script>
</body>

</html>