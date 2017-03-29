var cargarFormacion = function () {
    var titulos = JSON.parse($('#hdnFormacion').val());

    $('#tblFormacion').html('');

    titulos.forEach(function(elemento, indice) {
        $('#tblFormacion').append(
            '<tr>' +
            '   <td>' + elemento.titulo + '</td>' +
            '   <td>' + elemento.universidad + '</td>' +
            '   <td>' + elemento.anio + '</td>' +
            '   <td>' + elemento.cedula + '</td>' +
            '   <td><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button></td>' +
            '</tr>'
        );
    });

    $('#page-rightbar').load($('#hdnUrlFormularioNuevo').val());
};

$(document).ready(function () {
    $('#selEspecialidad').select2({width: 'resolve', tags: ['Pediatría', 'Neonatología', 'Neurología', 'Cardiología']});
    cargarFormacion();
});