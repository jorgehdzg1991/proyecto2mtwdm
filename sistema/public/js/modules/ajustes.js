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
            '</tr>'
        );
    });
};

$(document).ready(function () {
    $('#selEspecialidad').select2({width: 'resolve', tags: ['Pediatría', 'Neonatología', 'Neurología', 'Cardiología']});
    cargarFormacion();
});