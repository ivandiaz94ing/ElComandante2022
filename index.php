<?php include "procesos/validarlogin.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="assets/alertifyjs/css/themes/bootstrap.css">
    <title>Login - CARWASH</title>
</head>

<body>
    <section class="material-half-bg">
        <div class="cover"></div>
    </section>
    <section class="login-content">

        <div class="login-box">
            <form class="login-form" action="" method="post">
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Iniciar Sesión</h3>
                <div class="form-group">
                    <div class="alert"><?php echo isset($alert) ? $alert : ''; ?></div>
                    <input class="form-control" type="text" id="usuario" name="usuario" minlength="4" maxlength="40" placeholder="*Ingrese Usuario" required="required">
                </div>
                <div class="form-group">

                    <input class="form-control" type="password" id="clave" name="clave" minlength="3" maxlength="20" placeholder="*Ingrese Password" required="required">
                </div>
                <div class="form-group">
                    <div class="utility">
                        <div class="animated-checkbox">
                        </div>
                        <p class="semibold-text mb-2"><a href="#" data-toggle="flip">No tienes Cuenta ?</a>
                        </p>
                    </div>
                </div>
                <div class="form-group btn-container">
                    <button class="btn btn-primary btn-block" type="submit" id="btnlogion"><i class="fa fa-sign-in fa-lg fa-fw"></i>INGRESAR</button>
                </div>
            </form>
            
            <form class="forget-form" method="post" id="FrmUsuario" onsubmit="return agregarNuevo()">
                <div class="form-group">
                    <input class="form-control" type="email" id="correo" name="correo" placeholder="*Ingrese Email" required="required">
                </div>
                <div class="form-group">
                    <input class="form-control" type="text" id="usuario" name="usuario" minlength="4" maxlength="40" placeholder="*Ingrese Usuario" required="required">
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" id="clave" name="clave" minlength="3" maxlength="20" placeholder="*Ingrese Password" required="required">
                </div>
                <input type="text" hidden="" value="Cliente" id="rol" name="rol">
                <div class="form-group btn-container">
                    <button  type="" id="btnGuardar" class="btn btn-primary btn-block"><i class="fa fa-chevron-circle-down fa-lg fa-fw"></i>REGISTRAR</button>
                </div>
                <div class="form-group mt-3">
                    <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i>
                            Iniciar sesión</a></p>
                </div>
            </form>
        </div>
    </section>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/sweetalert.min.js"></script>
    <script src="js/principal.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/plugins/pace.min.js"></script>
    <script type="text/javascript">
        $('.login-content [data-toggle="flip"]').click(function() {
            $('.login-box').toggleClass('flipped');
            return false;
        });
    </script>

    

</body>

</html>