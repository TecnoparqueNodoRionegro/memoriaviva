@extends('layouts.template')

@section('title', 'Inicio')

@section('content')
<div class="container">

         {{-- Video --}}
    <div class=" video-responsive ratio ratio-16x9 mb-5 mt-3">
        <iframe class="rounded" width="560" height="315" src="https://www.youtube.com/embed/drurn1UXqMU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    {{-- Slider murales --}}
    <div class=" row">


        <div class="bg-5 col-md-4 d-flex justify-content-center align-items-center">

            {{-- <p class="murales text-white">MURALES</p>
            <p class="con text-white">CON COLORES DE</p>
            <P class="esperanza text-white">ESPERANZA</P> --}}
            {{-- <h1 class="animated-shadow">MURALES CON COLORES DE ESPERANZA</h1> --}}
            <div class="hit-the-floor">MURALES CON COLORES DE ESPERANZA</div>
        </div>

        <div class="col-md-8">

            <div id="carouselExampleIndicators" class="carousel slide" >
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>

                <div class="carousel-inner rounded mb-3">
                    <div class="carousel-item active">
                        <img src="{{ URL::asset('storage/img/sliders01.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('storage/img/sliders02.png') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('storage/img/sliders03.png') }}" class="d-block w-100" alt="...">
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>

    </div>

    {{--fotter--}}
    <div>
        <h1>contactanos</h1>
        <form action="{{route('contactanos.store')}}" method="POST">
            @csrf
            <label for="nombre">
                <input type="text" name="nombre" id="">
            </label>
            
            <label for="correo">
                <input type="email" name="correo" id="">
            </label>
            <label for="mensaje">
                <br>
                <textarea  name="mensaje" placeholder="mensaje" id="mensaje"></textarea>
            </label>

            <button type="submit">enviar mensaje</button>
        </form>
    </div>
</div>
@include('layouts.footer')
@endsection
