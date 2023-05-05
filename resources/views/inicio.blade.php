@extends('layouts.template')

@section('title', 'Inicio')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous"/>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />



<div class="w-100" style="z-index: 1;">
    <nav class="navbar navbar-expand-xl">
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
                        @if (auth()->check())
                            <li class="nav-item">
                                <a class="nav-link text-white {{ request()->routeIs($menu->route) ? 'border-bottom border-warning' : ''  }}"  aria-current="page" href="{{route($menu->route)}}"><i class="fa-solid fa-cart-shopping"></i></a>
                            </li>
                        @endif
                    @else

                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs($menu->route) ? 'border-bottom border-warning' : ''  }}"  aria-current="page" href="{{route($menu->route)}}">{{$menu->title}}</a>
                    </li>
                    @endif
                    @endforeach
                </ul>

            </div>
            @if (auth()->check())
            <div class="text-white">
               <p>Bienvenido {{$username = Auth::user()->email }}</p>

            </div>
            <a class="btn border border-white text-white" href="{{ route('signOut')}}">Cerrar Sesión <i class="fa-solid fa-right-from-bracket mx-1 text-white"></i></a>
            @else
            <div class="2">
                <a class="btn border border-white text-white" href="{{ route('login') }}">Ingresar</a>
            </div>
            @endif
        </div>
    </nav>
</div>

{{-- slider --}}
{{-- <div class="container">
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="{{ URL::asset('storage/img/slide1.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="{{ URL::asset('storage/img/slide2.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ URL::asset('storage/img/slide3.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ URL::asset('storage/img/slide4.jpg') }}" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ URL::asset('storage/img/slide5.jpg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</div> --}}

<div class="container">

    <div class="owl-carousel"  style="animation: cambio 1s infinite alternate; animation-timing-function:ease"  id="owlCarousel">

        <div class="position-relative d-flex justify-content-center card-header" style="background-color: #120A33;">
            <div class="card-img">
                <img class="w-100 h-100 object-fit-cover" src="{{ URL::asset('storage/img/slide1.jpg') }}">
            </div>
        </div>

        <div class="position-relative d-flex justify-content-center card-header" style="background-color: #120A33;">
            <div class="card-img">
                <img class="w-100 h-100 object-fit-cover" src="{{ URL::asset('storage/img/slide2.jpg') }}">
            </div>
        </div>
        <div class="position-relative d-flex justify-content-center card-header" style="background-color: #120A33;">
            <div class="card-img">
                <img class="w-100 h-100 object-fit-cover"src="{{ URL::asset('storage/img/slide3.jpg') }}">
            </div>
        </div>
        <div class="position-relative d-flex justify-content-center card-header" style="background-color: #120A33;">
            <div class="card-img">
                <img class="w-100 h-100 object-fit-cover"src="{{ URL::asset('storage/img/slide3.jpg') }}">
            </div>
        </div>
        <div class="position-relative d-flex justify-content-center card-header" style="background-color: #120A33;">
            <img class="w-100 h-100 object-fit-cover"src="{{ URL::asset('storage/img/slide3.jpg') }}">
        </div>
        <div class="position-relative d-flex justify-content-center card-header" style="background-color: #120A33;">
            <div class="card-img">
                <img class="w-100 h-100 object-fit-cover"src="{{ URL::asset('storage/img/slide3.jpg') }}">
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#owlCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#owlCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>


<div class="container">
    <div class="">
        <div class="mt-3 flex-col  text text-sm-start text-md-start text-lg-start text-xl-start">
            <div style="-webkit-text-stroke: 3px #fdcf00; color: transparent; font-family: 'Noto Sans', sans-serif;">
                <h1 class="text-center" style="font-size: 80px;">Memoria</h1>
            </div>
            <div style="color: #fdcf00; font-family: 'Noto Sans', sans-serif;">
                <h1  class="text-center" style="font-size: 60px;">Sueños y Esperanza</h1>
            </div>
            <div  class="w-100 text-justify mt-4" style="color: white; font-family: 'Noto Sans', sans-serif;">
                <p style="font-size: 18px;">
                    San Carlos es un municipio en el departamento de Antioquia, Colombia, fundado en 1786.
                </p>
                <p style="font-size: 18px;">
                    Es conocido por su riqueza hidrológica y ambiental, con 7 cuencas y 76 quebradas
                    cristalinas que surten los embalses de Punchiná, Calderas y Playas,
                    generando el 30% de la energía del sistema eléctrico nacional.
                </p>
                <p style="font-size: 18px;">
                    Su biodiversidad lo ha hecho ser reconocido como municipio Verde de Colombia.
                    El territorio es predominantemente montañoso, con algunas áreas planas cerca del río San Carlos.
                </p>
                <p style="font-size: 18px;">
                    Según proyecciones del DANE, la población en 2023 será de 16.559 personas,
                    con una fuerte presencia rural que influye en su cultura y economía.
                </p>
                <p style="font-size: 18px;">
                    El conflicto en Colombia ha afectado a muchas personas, incluyendo a 16.196 víctimas declaradas en San Carlos.
                    En cuanto a la composición étnica del municipio, el censo del DANE de 2018 indica que el
                    0.35% de la población es indígena o afrocolombiana.
                </p>

                <p style="font-size: 18px;">
                    El muralismo en San Carlos, Colombia, comenzó en 2009 después de la desmovilización de las autodefensas
                    y el retorno de los Sancarlitanos desplazados. Ahora es reconocido a nivel nacional e internacional
                    como la galería artística de la memoria al aire libre más grande del Oriente Antioqueño.
                </p>
                <p style="font-size: 18px;">
                    La pintura de murales en San Carlos surgió de la necesidad de resignificar las paredes marcadas con grafitis
                    de propaganda de guerra y represión social. Estos grafitis generaban perturbaciones psicológicas en la
                    comunidad y perpetuaban el conflicto.
                </p>
                <p style="font-size: 18px;">
                    En 2010, el colectivo de artistas “Memoria de Sueños y Esperanzas” comenzó a pintar murales en San Carlos
                    con sus propios recursos. Los murales representaban las historias de las comunidades y su cultura.
                    En 2012, las instituciones reconocieron el valor de los murales para transformar los
                    imaginarios del conflicto y reconstruir la memoria histórica.
                </p>
                <p style="font-size: 18px;">
                    En 2018, la “Corporación Memoria de Sueños y Esperanzas” realizó el primer encuentro internacional
                    de muralismo por la Paz “Memoria a Todo Color”. El objetivo es recuperar la memoria histórica y
                    contribuir a los procesos de paz. Actualmente, San Carlos tiene más de 124 murales y una ruta
                    turística “Tour Memoria a Todo Color”.
                </p>
                <p style="font-size: 18px;">
                    Los murales en San Carlos han jugado un papel fundamental en la reconstrucción de la memoria histórica
                    y el tejido social. Reflejan la capacidad de perdón, reconciliación y resiliencia de las comunidades.
                    San Carlos es reconocido por sus más de 124 murales como patrimonio histórico y cultural.
                </p>
                <p style="font-size: 18px;">
                    El proyecto “Murales Vivos” busca promocionar la memoria y la historia de San Carlos a través de
                    la realidad aumentada. Esto permite impulsar la ruta turística y cultural “Memoria a Todo Color”
                    y los encuentros internacionales de muralismo por la paz.
                </p>
            </div>
        </div>
    </div>

</div>



{{-- <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="10000">
        <img src="/public/storage/img/slide1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="{{ URL::asset('storage/img/slide2.jpg') }}" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="{{ URL::asset('storage/img/slide3.jpg') }}" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div> --}}

{{-- descripcion --}}

{{-- <div class="container">

</div> --}}



{{-- @extends('layouts.footer') --}}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>


<script>
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 20,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 1
        },
        1200: {
            items: 1
        }
    }
})
</script>
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
