<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/paginaInicial/index.css') }}">
    <!-- Iconos Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    @include('partials/navCiudadanos')
    @include('partials/ofCanvasLoggedCiudadano')
    <section>

        <div>
            <h1 class="text-body-emphasis h4 mb-4 ">Filtrar Por:</h1>
            <form action="{{ route('sondeos.index') }}" method="GET">
                <div class="d-flex align-items-center" style="max-width: 300px;">
                    <button class="btn btn-sm btn-outline-secondary me-2" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarToggleExternalContent" aria-expanded="false">
                        <i class="bi bi-toggles"></i>
                    </button>
                    <div class="search-bars flex-grow-1">
                        <input name="buscar" class="form-control smallSearchBar" id="smallSearchBar" type="search"
                                placeholder="¿Qué buscas?" aria-label="Search">
                    </div>
                    <button class="btn btn-outline-success ms-2 searchButton" id="searchButton" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </div>
                
                
                <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">

                    <!-- Filtro: Fecha -->

                    <div class="bg-light p-4 filterDiv row">
                        <div class="mb-1 ms-1 col-xl-1">
                            <label for="fecha" class="form-label">Fecha</label>
                            <input type="datetime-local" id="fecha" class="form-control" >
                        </div>

                        <!-- Filtro: Sexo -->
                        <div class="mb-1 col-xl-2">
                            <label for="sexo" class="form-label">Sexo</label>
                            <select name="sexo" class="form-select filterInput" id="sexo">
                                <option value="" selected>Default</option>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
                        </div>

                        <!-- Filtro: Etnia -->
                        <div class="mb-1 col-xl-2">
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
                        <div class="mb-1 col-xl-2">
                            <label class="form-label">Discapacidad</label>
                            <select class="form-select filterInput" id="discapacidad">
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
                        <div class="mb-1 col-xl-2">
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
                    </div>
            </form>

        </div>
        </div>
    </section>

    <section class="row row-gap-3 d-flex flex-column">
        <div id="sondeosInicio" class="sondeosInicio">
            <h2 class="text-center">Sondeos</h2>
            <div class="row justify-content-center gap-4">
                @foreach ($sondeos as $sondeo)
                    <div class="col-ms-12 col-md-4 col-xxl-3">
                        <div class="card">
                            <img src="{{ asset('storage') . '/' . $sondeo->imagen }}" class="card-img-top"
                                alt="Imagen del sondeo">
                            <div class="card-body">
                                <h5 class="card-title">{{ $sondeo->titulo }}</h5>
                                <p class="card-text">{{ $sondeo->descripcion }}</p>
                                <a href="#" class="btn btn-primary">Contestar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>
