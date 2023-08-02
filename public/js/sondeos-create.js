$(document).ready(function () {
        // Función para mostrar el div correspondiente y resaltar el botón activo
        function showDiv(divId, buttonId) {
        $('#configuracionDiv, #preguntasDiv, #parametrizacionDiv').hide();
        $('#' + divId).show();
        $('.btn').removeClass('btn-active');
        $('#' + buttonId).addClass('btn-active');
        }
    
        // Agregar eventos para cada botón
        $('#btnConfiguracion').click(function () {
        showDiv('configuracionDiv', 'btnConfiguracion');
        });
    
        $('#btnPreguntas').click(function () {
        showDiv('preguntasDiv', 'btnPreguntas');
        });
    
        $('#btnParametrizacion').click(function () {
        showDiv('parametrizacionDiv', 'btnParametrizacion');
        });
});
