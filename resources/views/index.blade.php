<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('../public/css/paginaInicial/index.css') }}">


</head>
<body>
    {{-- Barra de navegacion --}}
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Crear Sondeo</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
    </nav>

    {{-- Seccion principal --}}
    <section class="container aling-items-strech">
        <div class="principal-superior d-flex flex-column justify-content-center align-items-center">
            <h1>SistemaSenaSoft</h1>
        </div>
    </section>

    {{-- Seccion sondeos --}}
    <section id="sondeos" class="align-items-stretch d-flex flex-column justify-content-center align-items-center gap-3">
      <h2 class="text-center">Sondeos</h2>
      <div class="row justify-content-center gap-4">
        @forelse ($sondeos as $sondeo)
          <div class="card col-12 col-md-12 col-xxl-4" style="width: 300px;">
              <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.nationalgeographic.com.es%2Fanimales%2Fperros&psig=AOvVaw3SfdZ9NC9pgIfBvA3XwgZD&ust=1690918180640000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIjCtK7XuYADFQAAAAAdAAAAABAD" class="card-img-top" alt="...">
              <div class="card-body">
                  <h5 class="card-title">{{$sondeo->titulo }}</h5>
                  <p class="card-text">{{$sondeo->descripcion}}</p>
                  <a href="#" class="btn btn-primary">Contestar</a>
              </div>
          </div>
        @empty
        @endforelse 
      </div>
      <div class="d-flex flex-column justify-content-center align-items-center">
        <button type="button" class="btn btn-primary">Ver mas sondeos</button>
      </div>
    </section>
    

    {{-- Pie de pagina --}}
    <section>
    </section>
</body>
</html>