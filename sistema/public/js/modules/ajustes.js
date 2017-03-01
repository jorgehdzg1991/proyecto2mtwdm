var cargarFormacion = function () {
    var titulos = JSON.parse($('#hdnFormacion').val());

    $('#tblFormacion').html('');

    var botonEliminar = $('#hdnLocation').val() === 'formacionacademica'
        ? '     <td><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></td>'
        : '';

    titulos.forEach(function(elemento, indice) {
        $('#tblFormacion').append(
            '<tr>' +
            '   <td>' + elemento.titulo + '</td>' +
            '   <td>' + elemento.universidad + '</td>' +
            '   <td>' + elemento.anio + '</td>' +
            '   <td>' + elemento.cedula + '</td>' +
                botonEliminar +
            '</tr>'
        );
    });
};

$(document).ready(function () {
    $('#selEspecialidad').select2({width: 'resolve', tags: ['Pediatría', 'Neonatología', 'Neurología', 'Cardiología']});
    cargarFormacion();

    if ($('#hdnLocation').val() === 'formacionacademica') {
        $('#page-rightbar').load($('#hdnUrlFormularioNuevo').val());
    }
});