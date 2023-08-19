$(document).ready(function () {
    // FUNCIONALIDAD ENTRE "TABS"
    // Función para mostrar el div correspondiente y resaltar el botón activo
    function showDiv(divId, buttonId) {
    $('#configuracionDiv, #parametrizacionDiv').hide();
    $('#' + divId).show();
    $('.btn').removeClass('btn-active');
    $('#' + buttonId).addClass('btn-active');
    }

    // Agregar eventos para cada botón
    $('#btnConfiguracion').click(function () {
        showDiv('configuracionDiv', 'btnConfiguracion');
    });

    $('#btnParametrizacion').click(function () {
        showDiv('parametrizacionDiv', 'btnParametrizacion');
    });
});