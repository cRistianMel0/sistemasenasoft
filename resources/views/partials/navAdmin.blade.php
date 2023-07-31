<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('index')}}">SSF</a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto gap-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('index')}}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('sondeos.create')}}">Crear Sondeo</a>
                </li>
            </ul>
        </div>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Busca un sondeo..." aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">
                icono
            </button>
        </form>

        <div class="text-light ms-5">
            Perfil
        </div>
    </div>
</nav>