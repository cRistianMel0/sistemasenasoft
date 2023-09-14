@extends('indexAdmin')


@section('contenido')
<section class="row row-gap-3 my-4 d-flex flex-column justify-content-center align-items-center">
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
@endsection