@extends('layouts.template')

@section('title', 'Inicio')

@section('content')
<div class="container">

         {{-- Video --}}
    <div class=" video-responsive ratio ratio-16x9 mb-5 mt-3">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/vx0XnMn5DHQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    {{-- Slider murales --}}
    <div class=" row">

        <div class="bg-5 col-md-4 d-flex justify-content-center align-items-center">
            <div class="hit-the-floor">MURALES CON COLORES DE ESPERANZA</div>
        </div>

        <div class="col-md-8">

            <div id="carouselExampleIndicators" class="carousel slide" >
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div>

                <div class="carousel-inner rounded mb-3">
                    <div class="carousel-item active">
                        <img src="{{ URL::asset('storage/img/slide1.JPG') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('storage/img/slide2.JPG') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('storage/img/slide3.JPG') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('storage/img/slide4.JPG') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL::asset('storage/img/slide5.JPG') }}" class="d-block w-100" alt="...">
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
</div>
@include('layouts.footer')
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
        @if (session('enviar') =='ok')
            <script>
                Swal.fire('Mensaje Enviado con Éxito.')   
            </script>
        @endif  
    
<script type="text/javascript">
    $('#form-contact').submit(function (e) { 
        e.preventDefault();
        this.submit();
    });
</script>

@endsection
