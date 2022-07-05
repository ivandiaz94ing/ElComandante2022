function agregarNuevo() {
    $.ajax({
        method: "POST",
        data: $('#FrmUsuario').serialize(),
        url: "procesos/AddUsuario.php",
        success: function(r) {
            r = r.trim();
            if (r == 1) {
               
                swal(":D", "Su Registro Fue exitoso", "success");
                $('#FrmUsuario')[0].reset();
            } else {
                swal(":(", "Error usuario y/o correo no estan disponible", "error");
            }
        }
    });
    return false;
}
$("#btnLimpiar").click(function(event) {
    $("#FrmUsuario")[0].reset();
});

