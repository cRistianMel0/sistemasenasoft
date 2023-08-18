@extends('indexAdmin')

@section('title', 'Crear Sondeo')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sondeos-create.css') }}">
@endsection

@section('contenido')
    <div class="container mt-5">
        <h1>Sondeo</h1>

        <div class="d-flex">
            <button id="btnConfiguracion" class="btn btn-outline-secondary rounded-3 rounded-bottom-0 btn-active">Configuración</button>
            <button id="btnParametrizacion" class="btn btn-outline-secondary rounded-3 rounded-bottom-0">Parametrización</button>   
            <button id="btnPreguntas" class="btn btn-outline-secondary rounded-3 rounded-bottom-0" disabled>Preguntas</button>
        </div>

        <div class="bg-white mb-4 border rounded-bottom-3 border-secondary-subtle">
            <div id="formularioDiv">
                <form class="p-3" action="{{ route('sondeos.store') }}" method="POST">
                    @csrf
                    <!-- CONTENIDO DE CONFIGURACIÓN -->
                    <div class="container mt-3" id="configuracionDiv">
                        <input type="hidden" name="idAdministrador" value="{{$administrador->idAdministrador}}">

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
                                    <button type="button" id="btnCrearTema" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearTemaModal">Nuevo</button>
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

                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <label for="imagen">Imagen</label>
                                <input type="file" name="imagen" id="imagen" class="form-control-file">
                            </div>
                        </div>
                    </div>

                    <!-- CONTENIDO DE PARAMETRIZACIÓN -->
                    <div class="container mt-3" id="parametrizacionDiv" style="display: none;">
                        <p>Seleccione un criterio para que su sondeo vaya dirigirdo a cierto perfil de ciudadanos, sólo sí su sondeo lo requiere.</p>

                        <div class="col-10">
                            <div class="input-group mb-3">
                                <select name="idCriterio" id="idCriterio" class="form-select">
                                    @foreach($criterios as $criterio)
                                        <option value="{{$criterio->idCriterio}}">{{$criterio->nombre}}</option>                                       
                                    @endforeach
                                </select>
                                <button type="button" id="btnCrearCriterio" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#crearCriterioModal">Nuevo</button>
                            </div>
                        </div>

                        <p>De otra forma deje la opción por defecto "0. No Aplica".</p>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Siguiente</button>
                        </div>
                    </div>
                </form>

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

    <!-- Modal para crear un nuevo criterio -->
    <div class="modal fade" id="crearCriterioModal" tabindex="-1" aria-labelledby="crearCriterioModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="crearCriterioModalLabel">Nuevo Criterio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="crearCriterioForm" action="{{ route('criterios.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="nombreCriterio" class="form-label">Nombre para el Criterio:</label>
                            <input type="text" class="form-control" id="nombreCriterio" name="nombreCriterio" required>
                        </div>
                        <div class="mb-3">
                            <label for="condicionCriterio" class="form-label">Condición:</label>
                            <input type="text" class="form-control" id="condicionCriterio" name="condicionCriterio" required>
                        </div>
                        <div class="mb-3">
                            <label for="valor1Criterio" class="form-label">Valor 1:</label>
                            <input type="text" class="form-control" id="valor1Criterio" name="valor1Criterio" required>
                        </div>
                        
                        {{-- Agregar un segundo valor a la condición del criterio a crear --}}
                        <p>¿Desea agregar un segundo valor para la condición del criterio?</p>
                        <div class="mb-3">
                            <label for="siRadio">Si</label>
                            <input type="radio" name="opcionRadio" id="siRadio" value="si">
                            
                            <label for="noRadio">No</label>
                            <input type="radio" name="opcionRadio" id="noRadio" value="no">
                        </div>
                        
                        <div id="valor2Div" class="mb-3" style="display: none">
                            <label for="valor2Criterio" class="form-label">Valor 2:</label>
                            <input type="text" class="form-control" id="valor2Criterio" name="valor2Criterio">
                        </div>

                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Guardar Criterio</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

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
    {{-- Función para permitir el registro del valor 2 en criterios --}}
    <script>
        $(document).ready(function () {
            $('#siRadio').click(function () {
                if ($('#siRadio').is(':checked')) {
                    $('#valor2Div').show();
                    $('#valor2Criterio').prop('required', true);
                }
            });
    
            $('#noRadio').click(function () {
                if ($('#noRadio').is(':checked')) {
                    $('#valor2Div').hide();
                    $('#valor2Criterio').prop('required', false);
                }
            });
        });
    </script> 

    <script src="{{ asset('js/sondeos-create.js') }}"></script>
@endsection