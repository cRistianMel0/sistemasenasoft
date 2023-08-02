@extends('indexAdmin')

@section('title', 'Crear Sondeo')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sondeos-create.css') }}">
@endsection

@section('contenido')
    <div class="container mt-5">
        <h1>Sondeo</h1>

        <div class="d-flex">
            <button id="btnConfiguracion" class="btn btn-outline-secondary rounded-3 rounded-bottom-0 btn-active" onclick="showDiv('configuracionDiv', 'btnConfiguracion')">Configuración</button>
            <button id="btnPreguntas" class="btn btn-outline-secondary rounded-3 rounded-bottom-0" onclick="showDiv('preguntasDiv', 'btnPreguntas')">Preguntas</button>
            <button id="btnParametrizacion" class="btn btn-outline-secondary rounded-3 rounded-bottom-0" onclick="showDiv('parametrizacionDiv', 'btnParametrizacion')">Parametrización</button>   
        </div>

        <div class="bg-white mb-4 border rounded-bottom-3 border-secondary-subtle">
            <form class="p-3" action="{{ route('sondeos.store') }}" method="POST">
                @csrf
                <!-- Contenido del formulario oculto por defecto -->
                <div id="formularioDiv">
                    <!-- Contenido de Configuración -->
                    <div class="container mt-3" id="configuracionDiv">
                        <div class="row mb-4">
                            <div class="col">
                                <div>
                                    <label for="tema">Tema</label>
                                </div>
                                <div class="input-group">
                                    <select name="idTema" id="idTema" class="form-select">
                                        @foreach($temas as $tema)
                                            <option value="{{$tema->idTema}}">{{$tema->nombre}}</option>                                       
                                        @endforeach
                                    </select>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearTemaModal">Nuevo</button>
                                </div>
                            </div>                            
                            <div class="col">
                                <label for="titulo">Título Sondeo</label>
                                <input type="text" name="titulo" id="titulo" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col">
                                <label for="fechaHoraInicio">Fecha y hora de inicio</label>
                                <input type="datetime-local" name="fechaHoraInicio" id="fechaHoraInicio" class="form-control">
                            </div>
                            <div class="col">
                                <label for="fechaHoraFin">Fecha y hora de fin</label>
                                <input type="datetime-local" name="fechaHoraFin" id="fechaHoraFin" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-5">
                            <div class="col">
                                <label for="imagen">Imagen</label>
                                <input type="file" name="imagen" id="imagen" class="form-control-file">
                            </div>
                            <div class="col">
                                <label for="generarCertificado">Generar Certificado</label>
                                <input type="checkbox" name="generarCertificado" id="generarCertificado">
                            </div>
                        </div>
                    </div>
    
                    <!-- Contenido de Preguntas -->
                    <div class="container mt-5" id="preguntasDiv" style="display: none;">
                        <div id="preguntasContainer">
                            <!-- Aquí mostraremos las preguntas existentes y las nuevas que se agreguen -->
                        </div>
                        <div class="row mt-3">
                            <div class="col">
                                <button type="button" class="btn btn-primary" onclick="agregarPregunta()">Agregar Pregunta</button>
                            </div>
                        </div>
                    </div>
    
                    <!-- Contenido de Parametrización -->
                    <div class="container mt-5" id="parametrizacionDiv" style="display: none;">
                        <div class="row mb-4">
                            <div class="col">
                                <label for="parametro1">Parámetro 1</label>
                                <input type="text" name="parametro1" id="parametro1" class="form-control">
                            </div>
                            <div class="col">
                                <label for="parametro2">Parámetro 2</label>
                                <input type="text" name="parametro2" id="parametro2" class="form-control">
                            </div>
                            <!-- Agregar más parámetros si es necesario -->
                        </div>

                        <!-- Botón para guardar el formulario -->
                        <div class="row mt-4 mb-3 text-center">
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Guardar Sondeo</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal para crear un nuevo tema -->
    <div class="modal fade" id="crearTemaModal" tabindex="-1" aria-labelledby="crearTemaModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="crearTemaModalLabel">Nuevo Tema</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="crearTemaForm" action="{{ route('temas.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombreTema" class="form-label">Nombre del Tema:</label>
                            <input type="text" class="form-control" id="nombreTema" name="nombreTema" required>
                        </div>
                        <div class="mb-3">
                            <label for="descripcionTema" class="form-label">Descripción del Tema:</label>
                            <textarea class="form-control" id="descripcionTema" name="descripcionTema" rows="3" required></textarea>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Guardar Tema</button>
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