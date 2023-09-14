@extends('indexAdmin')

@section('title', 'Crear Sondeo')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/sondeos-create.css') }}">
@endsection

@section('contenido')
    <div class="container mt-5">
        <h1>Sondeo</h1>

        <div class="d-flex">
            <button id="btnConfiguracion"
                class="btn btn-outline-secondary rounded-3 rounded-bottom-0 btn-active">Configuración</button>
            <button id="btnParametrizacion"
                class="btn btn-outline-secondary rounded-3 rounded-bottom-0">Parametrización</button>
            <button id="btnPreguntas" class="btn btn-outline-secondary rounded-3 rounded-bottom-0" disabled>Preguntas</button>
        </div>

        <div class="bg-white mb-4 border rounded-bottom-3 border-secondary-subtle">
            <div id="formularioDiv">
                <form class="p-3" action="{{ route('sondeos.store') }}" method="POST">
                    @csrf
                    <!-- CONTENIDO DE CONFIGURACIÓN -->
                    <div class="container mt-3" id="configuracionDiv">
                        <input type="hidden" name="idAdministrador" value="{{ $administrador->idAdministrador }}">

                        <div class="row mb-4">
                            <div class="col">
                                <div>
                                    <label for="tema">Tema</label>
                                </div>
                                <div class="input-group">
                                    <select name="idTema" id="idTema" class="form-select">
                                        @foreach ($temas as $tema)
                                            <option value="{{ $tema->idTema }}">{{ $tema->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <button type="button" id="btnCrearTema" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#crearTemaModal">Nuevo</button>
                                </div>
                            </div>
                            <div class="col">
                                <label for="titulo">Título Sondeo</label>
                                <input type="text" name="titulo" id="titulo" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-5">
                            <div class="col">
                                <label for="fechaHoraInicio">Fecha y hora de inicio</label>
                                <input type="datetime-local" name="fechaHoraInicio" id="fechaHoraInicio"
                                    class="form-control" required>
                            </div>
                            <div class="col">
                                <label for="fechaHoraFin">Fecha y hora de fin</label>
                                <input type="datetime-local" name="fechaHoraFin" id="fechaHoraFin" class="form-control"
                                    required>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col ">
                                <label for="descripcion" class="form-label">Descripción del Sondeo</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                            </div>
                            <div class="col d-flex justify-content-center align-items-center">
                                <label for="imagen">Imagen</label>
                                <input type="file" name="imagen" id="imagen" class="form-control-file">
                            </div>
                        </div>
                    </div>

                    <!-- CONTENIDO DE PARAMETRIZACIÓN -->
                    <div class="container mt-3" id="parametrizacionDiv" style="display: none;">
                        <p>Seleccione un criterio para que su sondeo vaya dirigirdo a cierto perfil de ciudadanos, sólo sí
                            su sondeo lo requiere.</p>
                        <button type="button" id="btnCrearCriterio" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#crearCriterioModal">Nuevo</button>


                        <div class="col-10">
                            <div class="input-group mb-3">
                                <select name="idCriterio" id="idCriterio" class="form-select">
                                    @foreach ($criterios as $criterio)
                                        <option value="{{ $criterio->idCriterio }}">{{ $criterio->idCriterio }}</option>
                                        
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Filtro: Sexo -->
                        <form id="crearCriterioForm" action="{{ route('criterios.store') }}" method="POST">


                        </form>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Siguiente</button>
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
    <div class="modal fade" id="crearCriterioModal" tabindex="-1" aria-labelledby="crearCriterioModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="crearCriterioModalLabel">Nuevo Criterio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="crearCriterioForm" action="{{ route('criterios.store') }}" method="POST">
                        @csrf
                        <div class="mb-1 col-6">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select name="sexo" class="form-select filterInput" id="sexo">
                                <option value="" selected>Default</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>

                        <!-- Filtro: Etnia -->
                        <div class="mb-1 col-6">
                            <label class="form-label">Etnia</label>
                            <select name="etnia" class="form-select filterInput" id="etnia">
                                <option value="" selected>Default</option>
                                <option value="Cundiboyacense">Cundiboyacense</option>
                                <option value="Paisa">Paisa</option>
                                <option value="Valluno">Valluno</option>
                            </select>
                        </div>

                        <!-- Filtro: Edad -->
                        <div class="mb-1 col-xl-1">
                            <label class="form-label">Edad</label>
                            <select name="edad" class="form-select filterInput" id="edad">
                                <option value="" selected>Default</option>
                                <option value="< 18">&lt; 18</option>
                                <option value="> 18">&gt; 18</option>
                            </select>
                        </div>

                        <!-- Filtro: Estrato -->
                        <div class="mb-1 col-xl-1">
                            <label class="form-label">Estrato</label>
                            <select name="estrato" class="form-select filterInput" id="estrato">
                                <option value="" selected>Default</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>

                        <!-- Filtro: Discapacidad -->
                        <div class="mb-1 col-6">
                            <label class="form-label">Discapacidad</label>
                            <select class="form-select filterInput" id="discapacidad" name="discapacidad">
                                <option value="" selected>Default</option>
                                <option value="Discapacidad visual">Discapacidad visual</option>
                                <option value="Discapacidad auditiva">Discapacidad auditiva</option>
                                <option value="Discapacidad motriz">Discapacidad motriz</option>
                                <option value="Discapacidad del habla">Discapacidad del habla</option>
                                <option value="Discapacidad del espectro autista">Discapacidad del espectro autista
                                </option>
                                <option value="Discapacidad del desarrollo">Discapacidad del desarrollo</option>
                            </select>
                        </div>

                        <!-- Filtro: Nivel de Educación -->
                        <div class="mb-1 col-6">
                            <label class="form-label">Educación</label>
                            <select name="educacion" class="form-select filterInput" id="nivelEducacion">
                                <option value="" selected>Default</option>
                                <option value="Guardería o Preescolar">Guardería o Preescolar</option>
                                <option value="Educación Primaria">Educación Primaria</option>
                                <option value="Educación Secundaria">Educación Secundaria</option>
                                <option value="Bachillerato">Bachillerato</option>
                                <option value="Educación Superior">Educación Superior</option>
                            </select>
                        </div>

                        <p>De otra forma deje la opción por defecto "Default".</p>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        // Función para permitir el registro del valor 2 en criterios
        $(document).ready(function() {
            $('#siRadio').click(function() {
                if ($('#siRadio').is(':checked')) {
                    $('#valor2Div').show();
                    $('#valor2Criterio').prop('required', true);
                }
            });

            $('#noRadio').click(function() {
                if ($('#noRadio').is(':checked')) {
                    $('#valor2Div').hide();
                    $('#valor2Criterio').prop('required', false);
                }
            });
        });
    </script>

    <script src="{{ asset('js/sondeos-create.js') }}"></script>
@endsection
