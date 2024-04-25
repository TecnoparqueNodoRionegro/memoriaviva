@extends('layouts.template')
@include('layouts.nav')
@section('title', 'Inicio')

<!-- body -->

<body>

    <!-- description -->
    <div class="section mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8"> <!-- Se ha cambiado el tamaño del contenedor del video -->
                    <!-- Card -->
                    <div class="card text-center bg-transparent"> <!-- Se establece el ancho máximo de la tarjeta y se centra horizontalmente -->
                        <!-- Card Body -->
                        <div class="card-body">
                            <!-- Video -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe src="https://player.vimeo.com/video/938907271?autoplay=1&loop=1&title=0&byline=0&portrait=0" width="800" height="400" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <!-- Button -->
                            <a href="enlace/de/playstore" class="btn btn-primary btn-lg btn-block mt-3">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-google-play" viewBox="0 0 16 16">
                                    <path d="M14.222 9.374c1.037-.61 1.037-2.137 0-2.748L11.528 5.04 8.32 8l3.207 2.96zm-3.595 2.116L7.583 8.68 1.03 14.73c.201 1.029 1.36 1.61 2.303 1.055zM1 13.396V2.603L6.846 8zM1.03 1.27l6.553 6.05 3.044-2.81L3.333.215C2.39-.341 1.231.24 1.03 1.27"/>
                                  </svg>
                                Descargar desde Google Play
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @extends('layouts.footer')
