<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    
    <title>Inicio</title>
</head>

<body>
    @include('partials/navCiudadanos')
    @include('partials/ofCanvasLoggedCiudadano')

    {{-- Seccion principal --}}
    <section class="seccionPrincipal container aling-items-strech" id="seccionPrincipal">
        <div class="principal-superior d-flex flex-column justify-content-center align-items-center">
            <h1>SistemaSenaSoft</h1>
            
        </div>
    </section>

    {{-- Seccion sondeos inicio --}}
    <section class="row row-gap-3 d-flex flex-column justify-content-center align-items-center">
        <div id="sondeosInicio" class="sondeosInicio">
            <h2 class="text-center">Sondeos</h2>
            <div class="row justify-content-center gap-4">
                @php
                    $sondeosAleatorios = $sondeos->shuffle()->take(6);
                @endphp

                @foreach ($sondeosAleatorios as $sondeo)
                    <div class="col-ms-12 col-md-4 col-xxl-3">
                        <div class="card">
                            <img src="{{ asset('storage') . '/' . $sondeo->imagen }}" class="card-img-top" alt="Imagen del sondeo" style="width: 200px; height: 200px; margin: 30px; margin-left: 100px;">
                            <div class="card-body">
                                <h5 class="card-title" style="max-height: 3rem">{{ $sondeo->titulo }}</h5>
                                <p class="card-text" style="max-height: 4rem">{{ $sondeo->descripcion }}</p>
                                <a href="#" class="btn btn-primary">Contestar</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @if (count($sondeos) > 6)
                <div class="d-flex flex-column justify-content-center align-items-center mt-3">
                    <a href="{{route('sondeos.mostrarVistaSondeos')}}" class="btn btn-primary">Ver más sondeos</a>
                </div>
            @endif
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
