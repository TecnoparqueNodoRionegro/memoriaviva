<div class="fixed-top">
    <nav class="navbar navbar-expand-xl" style="height: 7rem; background-color: black; box-shadow: 0 .125rem .25rem rgba(218, 218, 218, 0.25)">
        <div class="container-fluid fw-bold fs-5" style="background-color: rgba(0, 0, 0, 0.822);">
            <div class="col-2 d-flex" style="height: 6.5rem;">
                <a class="navbar-brand " href="#">
                    <img src="{{ URL::asset('storage/img/logo.png') }}" class="mx-5 w-100 h-100 object-fit-scale" href="{{ url('/') }}">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse col-10" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 " style="margin-left: 20%;">
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('index') ? 'border-bottom border-warning' : ''  }}"  aria-current="page" href="{{ route('index') }}">Inicio</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white {{ request()->routeIs('galleries.index', 'galleries.show') ? 'border-bottom border-warning' : ''  }}" href="{{ route('galleries.index') }}" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Murales
                        </a>
                        <ul class="dropdown-menu">
                            <li class="nav-item">
                                <a class="nav-link  text-white" aria-current="page" href="{{ route('galleries.index') }}">Galerías</a>
                            </li>
                        <li><hr class="dropdown-divider"></li>
                            <li class="nav-item">
                                <a class="nav-link  text-white" aria-current="page" href="#artistas">Artistas</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Ruta cultural</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('products.index') ? 'border-bottom border-warning' : '' }}" href="{{ route('products.index') }}">Tienda</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Descargar APP</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                    </li>

                    <li class="nav-item" style="">
                        <a class="nav-link text-white" href="{{ url('auth/login') }}">Iniciar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
