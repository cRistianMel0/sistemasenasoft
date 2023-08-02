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
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success me-2" type="submit">Search</button>
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
                    <h1 class="text-body-emphasis h4">Filtrar Por:</h1>

                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                      <label class="form-check-label me-2" for="flexSwitchCheckDefault">Fecha</label>
                      <input type="datetime-local" id="fehca">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                      <label class="form-check-label me-2" for="flexSwitchCheckDefault">Sexo</label>
                      <select name="" id="" value="Masculino">
                        <option value="">Masculino</option>
                        <option value="">Femenino</option>
                      </select>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                      <label class="form-check-label me-2" for="flexSwitchCheckDefault">Etnia</label>
                      <select name="" id="" value="Indìgena">
                        <option value="">Indìgena</option>
                        <option value="">Afrodescendiente</option>
                        <option value="">Malayo</option>
                      </select>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                      <label class="form-check-label me-2" for="flexSwitchCheckDefault">Edad</label>
                      <input type="number" id="edad">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                      <label class="form-check-label me-2" for="flexSwitchCheckDefault">Estrato</label>
                      <select name="" id="" value="1">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                        <option value="">5</option>
                        <option value="">6</option>
                      </select>
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                      <label class="form-check-label me-2" for="flexSwitchCheckDefault">Discapacidad</label>
                      <select name="" id="" value="Down">
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                      </select>
                    </div>
                    
                </div>
            </div>
            {{-- Off Canvas --}}


        </div>
    </section>



    {{-- Seccion principal --}}
    <section class="container aling-items-strech">
        <div class="principal-superior d-flex flex-column justify-content-center align-items-center">
            <h1>SistemaSenaSoft</h1>
        </div>
    </section>

    {{-- Seccion sondeos --}}
    <section id="sondeos" class="row row-gap-3 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center">Sondeos</h2>
        <div class="row justify-content-center gap-4">
            @forelse ($sondeos as $sondeo)
                <div class="col-ms-12 col-md-4 col-xxl-3">
                    <div class="card">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $sondeo->titulo }}</h5>
                            <p class="card-text">{{ $sondeo->descripcion }}</p>
                            <a href="#" class="btn btn-primary">Contestar</a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mt-3">
            <button type="button" class="btn btn-primary">Ver más sondeos</button>
        </div>
    </section>



    {{-- Pie de pagina --}}
    <section>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    </head>

</body>

</html>
