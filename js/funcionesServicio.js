$(document).ready(function() {
    $('#sampleTable').load('Reportes/ReporteServicios.php');
});

function agregarNuevo() {
    $.ajax({
        method: "POST",
        data: $('#FrmCategoria').serialize(),
        url: "../procesos/AddServicio.php",
        success: function(r) {
            r = r.trim();
            if (r == 1) {
                $('#sampleTable').load('ReporteServico.php');
                swal(":D", "Su Registro Fue exitoso", "success");
                $('#FrmCategoria')[0].reset();
            } else {
                swal(":(", "Error del Servidor", "error");
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
        datos = $('#FrmHojaDeVidaU').serialize();
        $.ajax({
            type: "POST",
            data: datos,
            url: "../procesos/UpdateServicio.php",
            success: function(r) {
                r = r.trim();
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteServicios.php');
                    alertify.success("Se Actualizo correctamente");
                } else {
                    alertify.error("Error, Fallo el Servidor");
                }
            }
        });
    });
});

function agregaFrmActualizarU(idServicioU) {
    $.ajax({
        type: "POST",
        data: "idServicioU=" + idServicioU,
        url: "../procesos/GetServio.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
            $('#nombreU').val(datos['nombre']);
            $('#precioU').val(datos['precio']);
            $('#idCategoriaU').val(datos['idCategoria']);
            $('#idServicioU').val(datos['idServicio']);
        }
    });
}

function eliminarDatos(idServicio) {
    alertify.confirm('Eliminar Registro', '¿Esta Seguro de eliminar este Registro ?', function() {
        $.ajax({
            type: "POST",
            data: "idServicio=" + idServicio,
            url: "../procesos/DeleteServicio.php",
            success: function(r) {
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteServicios.php');
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