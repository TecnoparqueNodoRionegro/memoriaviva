<!DOCTYPE html>
<html lang="es">
<head>

    @section('title', 'Inicio')

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- styles --}}
    <link rel="stylesheet" href="{{ asset("styles/inicio.css") }}">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300;500;700&display=swap" rel="stylesheet">

</head>

<!-- body -->

<body  style="background-image: url('/storage/img/fondo.png');  background-repeat:no-repeat;
background-attachment:fixed; background-size:cover;">

    <!-- header -->
    <section class="section">
        <div class="w-100" style="z-index: 1;">
            <nav class="navbar navbar-expand-xl">
                <div class="container-fluid fw-bold fs-5" style="background-color: rgba(0, 0, 0, 0);">
                    <div class="col-2 d-flex" style="height: 5rem;">
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
    </section>  
    <!-- main -->

    <main>
        <section class="section">
            <div id="carouselExampleInterval w-100 h-100 col-sm-12 col-md-8 col-lg-6 mx-auto" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                {{-- <div class="carousel-item active"  style="height: 500px" data-bs-interval="3000" >
                    <video class="d-block w-100" autoplay muted controls>
                    <source src="{{ URL::asset('storage/img/video1.mp4') }}"  type="video/mp4">
                    Tu navegador no soporta el video.
                    </video>
                </div> --}}

                    <div class="carousel-item active" data-bs-interval="3000">
                        <img src="{{ URL::asset('storage/img/slide1.jpg') }}" class="d-block w-100" style="height: 500px" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{ URL::asset('storage/img/slide2.jpg') }}" class="d-block w-100" style="height: 500px" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{ URL::asset('storage/img/slide3.jpg') }}" class="d-block w-100" style="height: 500px" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{ URL::asset('storage/img/slide4.jpg') }}" class="d-block w-100" style="height: 500px" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="3000">
                        <img src="{{ URL::asset('storage/img/slide5.jpg') }}" class="d-block w-100" style="height: 500px" alt="...">
                    </div>
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
        </section>


        <!-- description -->

        <div class="section mt-5">
            <div class="container p-1">
                <div class="text col-sm-12 col-md-8 col-lg-6 mx-auto" style="width:100%; background: transparent; min-height: 50vh; align-items: center;">

                    <div style="color: transparent; text-align: center; font-family: 'Poller One';
                        font-weight: bold; background-image: url('storage/img/background.jpg'); background-size: cover; background-position-y: 00px;
                        background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent; -webkit-text-stroke: 1px rgb(255, 238, 0);">

                        <h1 class="text-center" style="font-size: 140px;">Memoria</h1>

                        
                        <h1 class="text-center mb-4" style="font-size: 30px;  font-family: 'Poller One'; font-weight: semibold; -webkit-text-stroke: 0.5px rgb(255, 238, 0);">de</h1>
                        

                        <div style="color: transparent; text-align: center; font-family: 'Poller One';
                        font-weight: bold; background-image: url('storage/img/slide5.jpg'); background-size: cover; background-position-y: 00px;
                        background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;  -webkit-text-stroke: 0.5px rgb(166, 255, 0);">
    
                        <h1 class="text-center" style="font-size: 50px;">Sueños y Esperanzas</h1>
                        </div>

                    </div>

                    <div  class="w-100 text-justify mt-4 mb-4 " style="color: rgb(250, 250, 250); ">
                        <p class="fw-semibold fs-4 fst-normal">
                            San Carlos es un municipio en el departamento de Antioquia, Colombia, fundado en 1786.
                            <br>
                            Es conocido por su riqueza hidrológica y ambiental, con 7 cuencas y 76 quebradas
                            cristalinas que surten los embalses de Punchiná, Calderas y Playas,
                            generando el 30% de la energía del sistema eléctrico nacional.
                            <br>
                            Su biodiversidad lo ha hecho ser reconocido como municipio Verde de Colombia.
                            El territorio es predominantemente montañoso, con algunas áreas planas cerca del río San Carlos.
                            <br>
                            Según proyecciones del DANE, la población en 2023 será de 16.559 personas,
                            con una fuerte presencia rural que influye en su cultura y economía.
                            <br>
                            El conflicto en Colombia ha afectado a muchas personas, incluyendo a 16.196 víctimas declaradas en San Carlos.
                            En cuanto a la composición étnica del municipio, el censo del DANE de 2018 indica que el
                            0.35% de la población es indígena o afrocolombiana.
                            <br>
                            El muralismo en San Carlos, Colombia, comenzó en 2009 después de la desmovilización de las autodefensas
                            y el retorno de los Sancarlitanos desplazados. Ahora es reconocido a nivel nacional e internacional
                            como la galería artística de la memoria al aire libre más grande del Oriente Antioqueño.
                            <br>
                            La pintura de murales en San Carlos surgió de la necesidad de resignificar las paredes marcadas con grafitis
                            de propaganda de guerra y represión social. Estos grafitis generaban perturbaciones psicológicas en la
                            comunidad y perpetuaban el conflicto.
                            <br>
                            En 2010, el colectivo de artistas “Memoria de Sueños y Esperanzas” comenzó a pintar murales en San Carlos
                            con sus propios recursos. Los murales representaban las historias de las comunidades y su cultura.
                            En 2012, las instituciones reconocieron el valor de los murales para transformar los
                            imaginarios del conflicto y reconstruir la memoria histórica.
                            <br>
                            En 2018, la “Corporación Memoria de Sueños y Esperanzas” realizó el primer encuentro internacional
                            de muralismo por la Paz “Memoria a Todo Color”. El objetivo es recuperar la memoria histórica y
                            contribuir a los procesos de paz. Actualmente, San Carlos tiene más de 124 murales y una ruta
                            turística “Tour Memoria a Todo Color”.
                            <br>
                            Los murales en San Carlos han jugado un papel fundamental en la reconstrucción de la memoria histórica
                            y el tejido social. Reflejan la capacidad de perdón, reconciliación y resiliencia de las comunidades.
                            San Carlos es reconocido por sus más de 124 murales como patrimonio histórico y cultural.
                            <br>
                            El proyecto “Murales Vivos” busca promocionar la memoria y la historia de San Carlos a través de
                            la realidad aumentada. Esto permite impulsar la ruta turística y cultural “Memoria a Todo Color”
                            y los encuentros internacionales de muralismo por la paz.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @extends('layouts.footer')
    {{-- <footer class="text-white text-center text-lg-start"  style="background-color: rgba(0, 0, 0, 0.37);">
        <div class="container p-1">
            <div class="row mt-4">
                <h5 class="text text-center fs-2 mb-5">Contáctanos</h5>
                <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
        
                    <ul class="fa-ul" style="margin-left: 1.65em;">
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-envelope"></i></span><span class="ms-2">Correo electrónico: ejemplo@ejemplo.com</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-phone"></i></span><span class="ms-2">Teléfono: 123-456-7890</span>
                        </li>
                        <li class="mb-3">
                            <span class="fa-li"><i class="fas fa-map-marker-alt"></i></span><span class="ms-2">Dirección: 123 Calle Ejemplo, Ciudad Ejemplo, Estado Ejemplo.</span>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <form action="{{route('contactanos.store')}}" method="post" id="form-contact">
                        @csrf
                        <div class="input-group gap-2 mb-2">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" placeholder="Nombre:" >
                        @error('nombre')
                            <small class="text-danger">{{$message}}</small>
                        @enderror

                        <input type="email" class="form-control" id="correo" name="correo" value="{{old('correo')}}" placeholder="Email:">
                        @error('correo')
                            <small class="text-danger">{{$message}}</small>
                        @enderror    
                        </div>

                        <div class="mt-2">
                            <textarea class="form-control" id="mensaje" name="mensaje" rows="2" value="{{old('mensaje')}}" placeholder="Tú mensaje:"></textarea>
                                @error('mensaje')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                        </div>

                        <div class="d-grid mt-2">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>

                <div class="container">
                    <section class="text-center text-white">
                        <div class="border-bottom border-warning mb-3 mt-5">

                            <!-- Facebook -->
                            <a class="btn btn-primary btn-outline-light btn-floating rounded-circle m-1 mb-3" href="#!" role="button"
                            style="width: 5%;"><i class="fab fa-facebook-f"></i>
                            </a>

                            <!-- Youtube -->
                            <a class="btn btn-primary btn-outline-light btn-floating rounded-circle m-1 mb-3" href="#!" role="button"
                                style="width: 5%;"><i class="fab fa-youtube"></i>
                            </a>

                            <!-- Instagram -->
                            <a class="btn btn-primary btn-outline-light btn-floating rounded-circle m-1 mb-3" href="#!" role="button"
                                style="width: 5%;"><i class="fab fa-instagram"></i>
                            </a>

                            <!-- Twitter -->
                            <a class="btn btn-primary btn-outline-light btn-floating rounded-circle m-1 mb-3" href="#!" role="button"
                                style="width: 5%;"><i class="fab fa-twitter"></i>
                            </a>
                        </div>
                    </section>
                            
                    <div class="text-center fs-6 mb-2">
                        © 2023 Memoria todo color. Todos los derechos reservados.
                    </div>
                </div>
            </div>
        </div>
    </footer> --}}

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw="crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/46d368726b.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.min.js" integrity="sha256-a2yjHM4jnF9f54xUQakjZGaqYs/V1CYvWpoqZzC2/Bw=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
          $("#myCarousel").carousel();
        });
    </script>
</body>
</html>



