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
                <h1><i class="fa fa-edit"></i>Gestionar Categorias</h1>
            </div>
            <a class="btn btn-primary icon-btn" data-toggle="modal" data-target="#modalAddUsuario"><i class="fa fa-plus "></i>Nueva Categoria</a>
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
                        <h4>Actualizar Categoria</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmHojaDeVidaU">
                                    <input type="text" hidden="" id="idCategoriaU" name="idCategoriaU">
                                    <div class="col-md-12">
                                        <label class="control-label">Nombre de la Categoria:</label>
                                            <input class="form-control" id="nombreU" name="nombreU" type="text" placeholder="*Ingrese nombre de la Categoria" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" required="required" minlength="4" maxlength="20" title="Solamente se admiten caracteres">
                                        </div>
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
                        <h4 class="modal-title">Registrar Nueva Categoria</h4>
                        <button type="button" class="close" data-dismiss="modal">X</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form method="post" id="FrmCategoria" onsubmit="return agregarNuevo()">
                                    <hr>

                                    <div class="form-group row">
                                        
                                        <div class="col-md-12">
                                        <label class="control-label">Nombre de la Categoria:</label>
                                            <input class="form-control" id="nombre" name="nombre" type="text" placeholder="*Ingrese nombre de la Categoria" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{1,20}" required="required" minlength="4" maxlength="20" title="Solamente se admiten caracteres">
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
    <script src="../js/funcionesCategorias.js"></script>
</body>

</html>