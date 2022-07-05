$(document).ready(function() {
    $('#sampleTable').load('Reportes/ReporteCliente.php');
});

function agregarNuevo() {
    $.ajax({
        method: "POST",
        data: $('#FrmEmpleado').serialize(),
        url: "../procesos/AddCliente.php",
        success: function(r) {
            r = r.trim();
            if (r == 1) {
                $('#sampleTable').load('ReporteClientes.php');
                swal(":D", "Su Registro Fue exitoso", "success");
                $('#FrmEmpleado')[0].reset();
            } else {
                swal(":(", "Error el Cliente con esa identificacion ya se encunetra  registrado", "error");
            }
        }
    });
    return false;
}
$("#btnLimpiar").click(function(event) {
    $("#FrmUsuario")[0].reset();
});



$(document).ready(function() {
    $('#btnActualizarU').click(function() {
        datos = $('#FrmEmpleadoU').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "../procesos/UpdateCliente.php",
            success: function(r) {
                r = r.trim();
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteCliente.php');
                    alertify.success("Se Actualizo correctamente");
                } else {
                    alertify.error("Error, Fallo el Servidor");
                }
            }
        });
    });
});

function agregaFrmActualizarU(cedulaU) {
    $.ajax({
        type: "POST",
        data: "cedulaU=" + cedulaU,
        url: "../procesos/GetClinete.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
           
           
            $('#nombresU').val(datos['nombres']);
            $('#apellidosU').val(datos['apellidos']);
            $('#direccionU').val(datos['direccion']);
            $('#barrioU').val(datos['barrio']);
            $('#telefonoU').val(datos['telefono']);
            $('#Tipo_ClineteU').val(datos['Tipo_Clinete']);
            
            $('#cedulaU').val(datos['cedula']);
        }
    });
}

function eliminarDatos(cedula) {
    alertify.confirm('Eliminar Registro', '¿Esta Seguro de eliminar este Registro ?', function() {
        $.ajax({
            type: "POST",
            data: "cedula=" + cedula,
            url: "../procesos/DeleteCliente.php",
            success: function(r) {
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteCliente.php');
                    alertify.success("Eliminado con exito !");
                } else {
                    alertify.error("Error, Fallo el Servidor");
                }
            }
        });
    }, function() {});
}

$(".modal-header").css("background-color", "#19B1DA");
$(".modal-header").css("color", "white");


if (document.location.hostname == 'pratikborsadiya.in') {
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
}