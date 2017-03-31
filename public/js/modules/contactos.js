function eliminarVinculo(link) {
    bootbox.confirm({
        message: '¿Estas seguro de eliminar el contacto?',
        buttons: {
            confirm: {
                label: 'Si, borralo',
                className: 'btn-danger'
            },
            cancel: {
                label: 'Ahora no joven',
                className: 'btn-default'
            }
        },
        callback: function (result) {
            if (result === true) {
                window.location.href = link;
            }
        }
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
            "sEmptyTable": "No hay contactos registrados",
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
});