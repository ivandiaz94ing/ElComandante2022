$(document).ready(function() {
    $('#sampleTable').load('Reportes/ReporteVehiculo.php');
});

function agregarNuevo() {
    $.ajax({
        method: "POST",
        data: $('#FrmVehiculo').serialize(),
        url: "../procesos/AddVehiculo.php",
        success: function(r) {
            r = r.trim();
            if (r == 1) {
                $('#sampleTable').load('ReporteVehiculos.php');
                swal(":D", "Su Registro Fue exitoso", "success");
                $('#FrmVehiculo')[0].reset();
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
            url: "../procesos/UpdateVehiculo.php",
            success: function(r) {
                r = r.trim();
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteVehiculo.php');
                    alertify.success("Se Actualizo correctamente");
                } else {
                    alertify.error("Error, Fallo el Servidor");
                }
            }
        });
    });
});

function agregaFrmActualizarU(placaU) {
    $.ajax({
        type: "POST",
        data: "placaU=" + placaU,
        url: "../procesos/GetVehiculo.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
           
           
            $('#marcaU').val(datos['marca']);
            $('#colorU').val(datos['color']);
            $('#idClienteU').val(datos['idCliente']);
            $('#idCategoriaU').val(datos['idCategoria']);            
            $('#placaU').val(datos['placa']);
        }
    });
}

function eliminarDatos(placa) {
    alertify.confirm('Eliminar Registro', '¿Esta Seguro de eliminar este Registro ?', function() {
        $.ajax({
            type: "POST",
            data: "placa=" + placa,
            url: "../procesos/DeleteVehiculo.php",
            success: function(r) {
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteVehiculo.php');
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

$(document).ready(function(){
    $('#idCliente').select2();
});

$(document).ready(function(){
    $('#idClienteU').select2();
});


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