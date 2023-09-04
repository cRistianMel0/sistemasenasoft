<section>
    <div class="navbar-expand-lg bg-body-tertiary" id="navBar">
        {{-- Navegador --}}
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('index') }}">SSF</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{route('index.admin')}}">Admin</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search" action="{{ route('sondeos.index') }}" method="GET">
                        <button type="button" class="btn btn-outline-secondary me-2">Register</button>
                        <button type="button" class="btn btn-outline-success me-2">login</button>
                        <div class="search-bars">
                            <input name="buscar" class="form-control smallSearchBar" id="smallSearchBar" type="search"
                                placeholder="¿Qué buscas?" aria-label="Search" style="width: 150px">
                            <input class="form-control extendedSearchBar" id="extendedSearchBar" type="search"
                                style="display: none" placeholder="¿Qué buscas?" aria-label="Search">
                        </div>
                        <button class="btn btn-outline-success ms-2 me-2 searchButton" id="searchButton"
                            type="submit"><i class="bi bi-search"></i></button>
                        <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas"
                            href="#offcanvasExample" role="button" aria-controls="offcanvasExample" type="button">
                            <i class="bi bi-person-circle"></i>
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
</section>
