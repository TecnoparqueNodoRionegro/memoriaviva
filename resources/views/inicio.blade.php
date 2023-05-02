@extends('layouts.template')


@section('content')

<div class="container text-center">
    <div class="text">
        <div class="mt-3 flex-col">
            <div style="-webkit-text-stroke: 3px #fdcf00; color: transparent; font-family: 'Noto Sans', sans-serif;">
                <h1 class="text-center" style="font-size: 80px;">Memoria</h1>
            </div>
            <div style="color: #fdcf00; font-family: 'Noto Sans', sans-serif;">
                <h1  class="text-center" style="font-size: 60px;">Sueños y Esperanza</h1>
            </div>
            <div  class="w-100 text-center " style="color: white; font-family: 'Noto Sans', sans-serif;">
                <p style="font-size: 25px;">
                    La pintura de los murales a gran formato ya todo color en el municipio
                    de San Carlos, nace de la necesidad de resignificar las paredes y fachadas
                    de las casas, escenarios educativos, deportivos, culturales y
                    casetas de las juntas de accion comunal.
                    <br>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi asperiores
                    ipsam optio dolor ad eaque illo suscipit, accusamus, officia corrupti dicta
                    quos iusto quisquam, praesentium vitae non magni laudantium repudiandae.
                </p>
            </div>
        </div>
    </div>
</div>

@extends('layouts.footer')

@endsection






















{{-- <!doctype html>
<html lang="en">

<head>
  <title>Inicio</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@900&display=swap" rel="stylesheet">
</head>

<body  style="background-image: url('storage/img/fondo.png');">
  <header>
        <!-- place navbar here -->
        <div class="w-100" style="z-index: 1;">
            <nav class="navbar navbar-expand-xl">
                <div class="container-fluid fw-bold fs-5" style="background-color: rgba(0, 0, 0, 0);">
                    <div class="col-2 d-flex" style="width: 13vh; height: 13vh; ">
                        <a class="navbar-brand " href="#">
                            <img src="{{ URL::asset('storage/img/logo.png') }}" class="mx-5 w-100 h-100 object-fit-scale" href="{{ url('/') }}">
                        </a>
                    </div>
                    <button class="navbar-toggler-ml-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars text-white"></i>
                    </button>
                    <div class="collapse navbar-collapse col-8 px-2" id="navbarSupportedContent">
                        <ul class="navbar-nav">

                            @foreach ($menus as $menu)

                            @if ($menu->title == "Carrito")
                                <li class="nav-item">
                                    <a class="nav-link text-white {{ request()->routeIs($menu->route) ? 'border-bottom border-warning' : ''  }}"  aria-current="page" href="{{route($menu->route)}}"><i class="fa-solid fa-cart-shopping"></i></a>
                                </li>
                            @else
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->routeIs($menu->route) ? 'border-bottom border-warning' : ''  }}"  aria-current="page" href="{{route($menu->route)}}">{{$menu->title}}</a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    <div class="2">
                        <a class="btn border border-white text-white" href="{{ route('login') }}">Ingresar</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container justify-center">
            <div class="row">
                <div class="text-canter">
                    <div class="mx-5 fw-bold" style="position: absolute; top: 30%;">
                        <div style="-webkit-text-stroke: 3px #fdcf00; color: transparent; font-family: 'Noto Sans', sans-serif;">
                            <h1 class="text-center" style="font-size: 60px;">Memoria</h1>
                        </div>
                        <div style="color: #fdcf00; font-family: 'Noto Sans', sans-serif;">
                            <h1  class="text-center" style="font-size: 60px;">Sueños y Esperanza</h1>
                        </div>
                        <div  class="w-100 text-center " style="color: white; font-family: 'Noto Sans', sans-serif;">
                            <p style="font-size: 25px;">
                                La pintura de los murales a gran formato ya todo color en el municipio
                                de San Carlos, nace de la necesidad de resignificar las paredes y fachadas
                                de las casas, escenarios educativos, deportivos, culturales y
                                casetas de las juntas de accion comunal.
                                <br>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi asperiores
                                ipsam optio dolor ad eaque illo suscipit, accusamus, officia corrupti dicta
                                quos iusto quisquam, praesentium vitae non magni laudantium repudiandae.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html> --}}
