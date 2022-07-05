$(document).ready(function() {
    $('#sampleTable').load('Reportes/ReporteAgendas.php');
});

function agregarNuevo() {
    $.ajax({
        method: "POST",
        data: $('#FrmAgenda').serialize(),
        url: "../procesos/AddAgenda.php",
        success: function(r) {
            r = r.trim();
            if (r == 1) {
                $('#sampleTable').load('ReporteAgenda.php');
                swal(":D", "Su Registro Fue exitoso", "success");
                $('#FrmAgenda')[0].reset();
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
   
});

function agregaFrmActualizarU(id_agendaU) {
    $.ajax({
        type: "POST",
        data: "id_agendaU=" + id_agendaU,
        url: "../procesos/GetAgenda.php",
        success: function(r) {
            datos = jQuery.parseJSON(r);
           
            $('#fechaU').val(datos['fecha']);
            $('#horaU').val(datos['hora']);
            $('#idServicioU').val(datos['idServicio']);
            $('#idClienteU').val(datos['idCliente']);
            $('#placaU').val(datos['placa']);
            $('#estadoU').val(datos['estado']);
            $('#empleadoU').val(datos['empleado']);
            $('#id_agendaU').val(datos['id_agenda']);
        }
    });
}

function eliminarDatos(id_agenda) {
    alertify.confirm('Eliminar Registro', '¿Esta Seguro de eliminar este Registro ?', function() {
        $.ajax({
            type: "POST",
            data: "id_agenda=" + id_agenda,
            url: "../procesos/DeleteAgenda.php",
            success: function(r) {
                if (r == 1) {
                    $('#sampleTable').load('Reportes/ReporteAgendas.php');
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