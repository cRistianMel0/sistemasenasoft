@extends('indexAdmin')

@section('title', 'Crear Sondeo')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sondeos-create.css') }}">
@endsection

@section('contenido')
    <div class="container mt-5">
        <h1>Sondeo</h1>

        <div class="d-flex">
            <button id="btnConfiguracion" class="btn btn-outline-secondary rounded-3 rounded-bottom-0 btn-active" disabled>Configuración</button>
            <button id="btnParametrizacion" class="btn btn-outline-secondary rounded-3 rounded-bottom-0" disabled>Parametrización</button>   
            <button id="btnPreguntas" class="btn btn-outline-secondary rounded-3 rounded-bottom-0">Preguntas</button>
        </div>

        <div class="bg-white mb-4 border rounded-bottom-3 border-secondary-subtle">
            <div id="formularioDiv">
                <!-- CONTENIDO DE PREGUNTAS -->
                <form class="p-3" action="" method="POST">
                    <div class="container mt-1" id="preguntasDiv" style="display: none;">
                        {{-- <div class="row mb-4">
                            <label for="idSondeo">Sondeo</label>

                            <div class="col-4">
                                <input type="text" name="titulo" id="titulo" class="form-control" disabled value="{{$sondeo->titulo}}">
                            </div>
                            
                            <div class="col-4">
                                <input type="text" name="idSondeo" id="idSondeo" class="form-control" disabled value="{{$sondeo->idSondeo}}">
                            </div>
                        </div> --}}

                        <div id="preguntasContainer">
                            <p>Preguntas que desea realizar por medio del sondeo</p>
                            

                        </div>
                    
                        <div class="row mt-3">
                            <div class="col">
                                <button type="button" id="btnCrearPregunta" class="btn btn-primary" onclick="crearPregunta()">Agregar Pregunta</button>
                            </div>
                        </div>

                        <!-- Botón para guardar el formulario -->
                        <div class="row mt-4 mb-3 text-center">
                            <div class="col">
                                <button type="submit" id="btnPublicarSondeo" class="btn btn-primary">Publicar Sondeo</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- MODALES/VENTANAS EMERGENTES --}}
    <!-- Modal para crear una pregunta -->
    <div class="modal fade" id="crearPreguntaModal" tabindex="-1" aria-labelledby="crearPreguntaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="crearPreguntaModalLabel">Nueva Pregunta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="crearPreguntaForm" action="" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="descripcionPregunta" class="form-label">Pregunta:</label>
                            <input type="text" class="form-control" id="descripcionPregunta" name="descripcionPregunta" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipoPregunta" class="form-label">Tipo:</label>
                            <select name="tipoPregunta" id="">
                                <option value="">Texto</option>
                                <option value="">Opción Múltiple</option>
                                <option value="">Opción Múltiple con Única Respuesta</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Guardar Pregunta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/sondeos-create.js') }}"></script>
@endsection