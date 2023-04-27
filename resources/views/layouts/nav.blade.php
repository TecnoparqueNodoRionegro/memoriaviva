<div class="position-absolute w-100" style="z-index: 1;">
    <nav class="navbar navbar-expand-xl" style="background-color: rgba(0, 0, 0, 0);">
        <div class="container-fluid fw-bold fs-5" style="background-color: rgba(0, 0, 0, 0);">
            <div class="col-2 d-flex" style="height: 6.5rem;">
                <a class="navbar-brand " href="#">
                    <img src="{{ URL::asset('storage/img/logo.png') }}" class="mx-5 w-100 h-100 object-fit-scale" href="{{ url('/') }}">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse col-8 px-2" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    
                    @foreach ($menus as $menu)
                    
                    @if ($menu->title == "Carrito")
                        <li class="nav-item">
                            <a class="nav-link text-white {{ request()->routeIs('/') ? 'border-bottom border-warning' : ''  }}"  aria-current="page" href="{{route($menu->route)}}"><i class="fa-solid fa-cart-shopping"></i></a>
                        </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('/') ? 'border-bottom border-warning' : ''  }}"  aria-current="page" href="{{route($menu->route)}}">{{$menu->title}}</a>
                    </li>
                    @endif
                    @endforeach
                    <li class="nav-item">
                        <a class="nav-link text-white"  aria-current="page">Inicio</a>
                    </li>
                </ul>
            </div>
            <div class="2">
                <a class="btn border border-white text-white" href="{{ route('login') }}">Ingresar</a>
            </div>
        </div>
    </nav>
</div>
