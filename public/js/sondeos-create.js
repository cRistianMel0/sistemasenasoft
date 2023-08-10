$(document).ready(function () {
    // FUNCIONALIDAD ENTRE "TABS"
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


    // CONTENIDO TEMAS
    // Función para agregar un nuevo tema
    $('#btnCrearTema').click(
        function crearTema() {
            $.ajax({
                url: "{{ route('temas.store') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    nombreTema: $('#nombreTema').val(),
                    descripcionTema: $('#descripcionTema').val()
                },
                success: function (response) {
                    console.log(response);
                    // Cerrar el modal después de crear el tema
                    $('#crearTemaModal').modal('hide');
                },
                error: function (error) {
                    // Manejo del error
                    console.log(error);
                }
            });
        }
    );


    // CONTENIDO PREGUNTAS
    // Función para crear una pregunta
    $('#btnCrearPregunta').click(function () {
        // Mostrar el modal cuando se haga clic en el botón
        $('#crearPreguntaModal').modal('show');
    });

    // Función para agregar la pregunta creada en el div de preguntas
    const preguntasContainer = document.getElementById('preguntasContainer');

    $('#btnAgregarPregunta').click(
        function agregarPregunta(tipoPregunta) {
            if (tipoPregunta == "Texto") {
                preguntasContainer.innerHTML += `
                <div class="row mb-4 pregunta">
                    <div class="col">
                        <label for="pregunta1">Pregunta 1</label>
                        <input type="text" name="pregunta1" id="pregunta1" class="form-control">
                    </div>
    
                    <div class="col">
                        // Boton para eliminar la pregunta del div de preguntas
                    </div>
                </div>
                `
            } else if (tipoPregunta == "Opcion Multiple") {
                preguntasContainer.innerHTML += `
                <div class="row mb-4 pregunta">
                    <div class="col">
                        <label for="pregunta1">Pregunta 1</label>
                    </div>

                    <div class="col">
                        // Boton que permita agregar una nueva opcion
                    </div>
    
                    <div class="col">
                        // Boton para eliminar la pregunta del div de preguntas
                    </div>
                </div>
                `
            } else if (tipoPregunta == "Opcion Multiple de unica respuesta") {
                preguntasContainer.innerHTML += `
                <div class="row mb-4 pregunta">
                    <div class="col">
                        <label for="pregunta1">Pregunta 1</label>
                    </div>

                    <div class="col">
                        // Boton que permita agregar una nueva opcion
                    </div>
    
                    <div class="col">
                        // Boton para eliminar la pregunta del div de preguntas
                    </div>
                </div>
                `
            } else {
                alert("No ha seleccionado un tipo de pregunta válido")
            }

        }
    );
    
    
    // FUNCIÓN PARA GUARDAR Y PUBLICAR EL SONDEO
    $('#btnPublicarSondeo').click(
        function pera() {
            let res = confirm("¿Está seguro de publicar el sondeo?");

            if (res) {
                // Guardar sondeo con metodo store
                alert("Sondeo publicado")
            } else {
                // Evitar llamar al metodo store para no guardar el sondeo
            }
        }
    )
});