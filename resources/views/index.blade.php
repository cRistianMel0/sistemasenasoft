<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    {{-- CSS Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('../public/css/paginaInicial/index.css') }}">
    {{-- Iconos Bootstrap --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    {{-- Barra de navegacion --}}
    <section>
        <div class="navbar-expand-lg bg-body-tertiary">
            {{-- Navegador --}}
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <button class="btn btn-sm btn-outline-secondary me-2" type="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent"
                                aria-expanded="false"><i class="bi bi-toggles"></i></button>
                            <input class="smallSearchBar me-2" id="smallSearchBar" type="search"
                                placeholder="¿Que buscas?" aria-label="Search">
                            <input class="form-control extendedSearchBar me-2" id="extendedSearchBar" type="search" style="display: none; width: 1500px;"
                                placeholder="¿Que buscas?" aria-label="Search">
                            <button class="btn btn-outline-success me-2" type="submit"><i
                                    class="bi bi-search"></i></button>
                            <button class="btn btn-sm btn-outline-secondary" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                                aria-label="Toggle navigation">
                                <i class="bi bi-person-circle"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
            {{-- Collapse down filters --}}
            <div class="collapse" id="navbarToggleExternalContent" data-bs-theme="dark">
                <div class="bg-secondary p-4">
                    <h1 class="text-body-emphasis h4 mb-4">Filtrar Por:</h1>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckFecha">
                        <label class="form-check-label me-2" for="flexSwitchCheckFecha">Fecha</label>
                        <input type="datetime-local" id="fecha">
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckSexo">
                        <label class="form-check-label me-2" for="flexSwitchCheckSexo">Sexo</label>
                        <select class="form-select" id="sexo">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                        </select>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckEtnia">
                        <label class="form-check-label me-2" for="flexSwitchCheckEtnia">Etnia</label>
                        <select class="form-select" id="etnia">
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckEdad">
                        <label class="form-check-label me-2" for="flexSwitchCheckEdad">Edad</label>
                        <input type="number" class="form-control" id="edad">
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckEstrato">
                        <label class="form-check-label me-2" for="flexSwitchCheckEstrato">Estrato</label>
                        <select class="form-select" id="estrato">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" role="switch"
                            id="flexSwitchCheckDiscapacidad">
                        <label class="form-check-label me-2" for="flexSwitchCheckDiscapacidad">Discapacidad</label>
                        <select class="form-select" id="discapacidad">
                            <option value="Down">1</option>
                            <option value="Otra">2</option>
                        </select>
                    </div>

                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" role="switch"
                            id="flexSwitchCheckNivelEducacion">
                        <label class="form-check-label me-2" for="flexSwitchCheckDiscapacidad">Nivel de
                            educación</label>
                        <select class="form-select" id="discapacidad">
                            <option value="Down">1</option>
                            <option value="Otra">2</option>
                        </select>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Seccion principal --}}
    <section class="container aling-items-strech">
        <div class="principal-superior d-flex flex-column justify-content-center align-items-center">
            <h1>SistemaSenaSoft</h1>
        </div>
    </section>

    <section id="sondeos" class="row row-gap-3 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center">Sondeos</h2>
        <div class="row justify-content-center gap-4">
            @php
                $contador = 0;
                $sondeosAleatorios = $sondeos->shuffle();
            @endphp

            @foreach ($sondeosAleatorios as $sondeo)
                @if ($contador < 6)
                    <div class="col-ms-12 col-md-4 col-xxl-3">
                        <div class="card">
                            <img src="{{ $sondeo->imagen }}" class="card-img-top" alt="Imagen del sondeo">
                            <div class="card-body">
                                <h5 class="card-title">{{ $sondeo->titulo }}</h5>
                                <p class="card-text">{{ $sondeo->descripcion }}</p>
                                <a href="#" class="btn btn-primary">Contestar</a>
                            </div>
                        </div>
                    </div>
                @endif

                @php
                    $contador++;
                @endphp
            @endforeach
        </div>
        @if (count($sondeos) > 6)
            <div class="d-flex flex-column justify-content-center align-items-center mt-3">
                <button type="button" class="btn btn-primary">Ver más sondeos</button>
            </div>
        @endif
    </section>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script>
        var ocultar = document.getElementById("extendedSearchBar");

        $(document).ready(function() {
            // Manejar el cambio en todos los radio buttons
            $('#smallSearchBar').on('focus', function() {

                $('#extendedSearchBar').fadeIn();

            });
            window.onclick=function(event){
                if(event.target==ocultar){
                    ocultar.style.display='none';
                }
            }
        });
    </script>

    <script></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    </head>

</body>

</html>
