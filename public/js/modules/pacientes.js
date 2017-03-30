function verPaciente(url) {
    $.ajax({
        url: url,
        method: 'GET',
        dataType: 'json',
        success: function (response) {
            if (response.success) {
                cargarInfoPaciente(response.data);
                $('body').toggleClass('show-rightbar');
            } else {
                bootbox.alert('No se encontró la información del paciente');
            }
        },
        error: function (error, status, xhr) {
            console.log(xhr);
            bootbox.alert('Ha ocurrido un error al cargar la información, intente nuevamente.');
        }
    });
}

function cargarInfoPaciente(datos) {
    $('#page-rightbar').html('');

    var html = '<h3>Datos del paciente</h3><hr>';

    html += construirFormGroupDeshabilitado('Nombre', datos.nombre);
    html += construirFormGroupDeshabilitado('Apellido paterno', datos.apellido_paterno);
    html += construirFormGroupDeshabilitado('Apellido materno', datos.apellido_materno);
    html += construirFormGroupDeshabilitado('Sexo', datos.sexo === 'H' ? 'Masculino' : 'Femenino');
    html += construirFormGroupDeshabilitado('Fecha de nacimiento', datos.fecha_nacimiento);
    html += construirFormGroupDeshabilitado('Peso', datos.peso);
    html += construirFormGroupDeshabilitado('Estatura', datos.estatura);
    html += construirFormGroupDeshabilitado('Nacionalidad', datos.nacionalidad);
    html += construirFormGroupDeshabilitado('Teléfono', datos.telefono);
    html += construirFormGroupDeshabilitado('Correo electrónico', datos.correo);
    html += construirFormGroupDeshabilitado('Fecha de registro', datos.fecha_registro);

    html += '<br><button class="btn btn-primary" onclick="$(\'body\').toggleClass(\'show-rightbar\')">Esconder</button>';

    $('#page-rightbar').html('<div style="padding-top: 25px; padding-bottom: 50px; height: auto">' + html + '</div>');
}

function construirFormGroupDeshabilitado(label, valor) {
    return '' +
    '<div class="form-group">' +
    '   <label>' + label + '</label>' +
    '   <input type="text" class="form-control" value="' + valor + '" disabled="disabled">' +
    '</div>';
}

function eliminarPaciente(url) {
    bootbox.confirm('¿Estas seguro de eliminar el paciente?', function () {
        window.location.href = url;
    });
}

$(document).ready(function () {
    $('.datatables').dataTable({
        "sDom": "<'row'<'col-xs-6'l><'col-xs-6'f>r>t<'row'<'col-xs-6'i><'col-xs-6'p>>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
            "sLengthMenu": "Mostrando _MENU_ registros por página",
            "sSearch": "",
            "sInfo": "Mostrando del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty": "",
            "sEmptyTable": "No hay pacientes registrados",
            "sInfoFiltered": "(filtrado de un total de _MAX_)",
            "sZeroRecords": "No se encontraron registros que coincidan con los filtros especificados",
            "oPaginate": {
                "sPrevious": "Anterior",
                "sNext": "Siguiente"
            }
        }
    });
    $('.dataTables_filter input').addClass('form-control').attr('placeholder','Buscar...');
    $('.dataTables_length select').addClass('form-control');
    $('#sexo').select2();

    $('#fecha_nacimiento').datepicker({
        format: 'dd/mm/yyyy',
        language: 'es'
    });
});
