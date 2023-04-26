<div class="fixed-top">
    <nav class="navbar navbar-expand-lg" style="height: 7rem; background-color: black; box-shadow: 0 .125rem .25rem rgba(218, 218, 218, 0.25)">
        <div class="container-fluid fw-bold fs-5">
            <div class="col-2 d-flex">
                <a class="navbar-brand " href="#">
                    <img src="{{ URL::asset('storage/img/logo.png') }}" width="50%" class="mx-5" href="{{ url('/') }}">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars text-white"></i>
            </button>
            <div class="collapse navbar-collapse col-10" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 " style="margin-left: 20%;">
                    
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
                </ul>
            </div>
        </div>
    </nav>
</div>
