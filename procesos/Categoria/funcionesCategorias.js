$(document).ready(function() {
    $('#sampleTable').load('Reportes/ReporteCategoria.php');
});

function agregarNuevo() {
    $.ajax({
        method: "POST",
        data: $('#FrmCategoria').serialize(),
        url: "../procesos/AddCategoria.php",
        success: function(r) {
            r = r.trim();
            if (r == 1) {
                $('#sampleTable').load('ReporteCategorias.php');
                swal(":D", "Su Registro Fue exitoso", "success");
                $('#FrmCategoria')[0].reset();
            } else {
                swal(":(", "Error el nombre de la Categoria no estan disponible", "error");
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
            url: "../procesos/UpdateCategoria.php",
            success: function(r) {
                r = r.trim();
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteCategoria.php');
                    alertify.success("Se Actualizo correctamente");
                } else {
                    alertify.error("Error, Fallo el Servidor");
                }
            }
        });
    });
});

function agregaFrmActualizarU(idCategoriaU) {
    $.ajax({
        type: "POST",
        data: "idCategoriaU=" + idCategoriaU,
        url: "../procesos/GetCategoria.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
            $('#nombreU').val(datos['nombre']);
            $('#idCategoriaU').val(datos['idCategoria']);
        }
    });
}

function eliminarDatos(idCategoria) {
    alertify.confirm('Eliminar Registro', '¿Esta Seguro de eliminar este Registro ?', function() {
        $.ajax({
            type: "POST",
            data: "idCategoria=" + idCategoria,
            url: "../procesos/DeleteCategoria.php",
            success: function(r) {
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteCategoria.php');
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