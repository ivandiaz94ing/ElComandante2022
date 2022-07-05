
<?php  if($_SESSION['estado'] == "Inactivo"){ ?>
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header">
                        <h2 class="mb-3 line-head" id="indicators"><i class="fa fa-bell-o fa-lg"></i> Notificación </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <div class="alert alert-dismissible alert-warning">
                            <button class="close" type="button" data-dismiss="alert">×</button>
                            <h4>Advertencia!</h4>
                            <p>Su usuario se encuentra desactivado <a class="alert-link" >Se le limitara el acceso a las acciones en el sistema.</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
<?php }else if($_SESSION['estado'] == "Bloqueado"){ ?>  
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <div class="alert alert-dismissible alert-danger">
                            <button class="close" type="button" data-dismiss="alert">×</button>
                            <h4>Advertencia!</h4>
                            <p>Su usuario se encuentra Bloqueado <a class="alert-link" >Si tiene alguna duda Comunicarse a la oficina de Cempre.</a>.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php }else if($_SESSION['estado'] == "Activo" and $_SESSION['rol'] == "Estudiante"){
    ?> 
            <div class="row">
                <div class="col-lg-12">
                    <div class="bs-component">
                        <div class="alert alert-dismissible alert-success">
                            <button class="close" type="button" data-dismiss="alert">×</button>
                            <h4>Mensaje Informativo </h4>
                            <p>No te quedes sin diligenciar y mantener actualizada  tu Hoja de vida.</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
    