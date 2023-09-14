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
                        @auth
                            @if (Auth::user()->tipo == 'administrador')
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('index.admin')}}">Admin</a>
                            </li>
                            @endif
                        @endauth
                        
                        
                    </ul>
                    <form class="d-flex" role="search" action="{{ route('sondeos.index') }}" method="GET">
                        
                        
                        <div class="search-bars">
                            
                            <input name="buscar" class="form-control smallSearchBar" id="smallSearchBar" type="search"
                                placeholder="¿Qué buscas?" aria-label="Search" style="width: 150px">
                            <input class="form-control extendedSearchBar" id="extendedSearchBar" type="search"
                                style="display: none" placeholder="¿Qué buscas?" aria-label="Search">
                        </div>
                            <button class="btn btn-outline-success ms-2 me-2 searchButton" id="searchButton"
                            type="submit">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                              </svg>
                            </button>
                            @auth
                            <button class="btn btn-sm btn-outline-secondary" data-bs-toggle="offcanvas"
                            href="#offcanvasExample" role="button" aria-controls="offcanvasExample" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                              </svg>
                            </button>
                            @else
                            <a href="{{route('register')}}">
                                <button type="button" class="btn btn-outline-secondary me-2">Register</button>
                            </a>
                            
                            <a href="{{route('login')}}">
                                <button type="button" class="btn btn-outline-success me-2">login</button>
                            </a>
                            @endauth
                        
                    </form>
                </div>
            </div>
        </nav>
    </div>
</section>
