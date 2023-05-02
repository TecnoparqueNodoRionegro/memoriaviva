@extends('layouts.template')

@section('title', 'Murales')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
crossorigin="anonymous" />

<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
    crossorigin="anonymous"/>
    

@section('content')

<div class="container">

    @if ($categoryFiles->isEmpty())
    <div style="height: 30rem;">
        <h1 class="text-center text-white">Aún no hay galerías</h1>
    </div>
    @else
    <div class="galeria">
        <div class="w-100 h2 pb-2 mx-auto text-secondary border-bottom border-secondary">
            Albúm de murales
        </div>
        <div class="row">
            @foreach ($categoryFiles as $category)
            <div class="col-lg-4 col-md-6 col-sm-12 mt-3 mb-3">
                <a href="{{ route('galleries.show', $category) }}" class="text-decoration-none">
                <div class="card text-secondary">
                    @if ($files[$loop->iteration-1] == null)
                    <div class="d-flex align-items-center justify-content-center text-secondary card-header" style="height: 200px;">
                        <h3>VACÍO</h3>
                    </div>
                    @else
                    <div style="height: 200px;">
                        <img src="{{ URL::asset($files[$loop->iteration-1]->route) }}" class="w-100 h-100 object-fit-cover">
                    </div>
                    @endif

                    <div class="card-img-bottom text-center">
                    <span>{{ $category->description }}</span>
                    </div>
                </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    @endif


    <div class="container-fluid">
        <div class="w-100  h2  pb-2  mx-auto text-secondary border-bottom border-secondary">
            Nuestros artistas vinculados
        </div>


        <div class="row">
            <div class="col-12 m-auto">
                <div class="owl-carousel owl-theme">
                    <div class="item mb-4">
                        <div class="card shadow " style=" border-style: solid; border-width: 10px;
                            border-image: linear-gradient(45deg, rgb(18, 10, 51), rgb(156, 37, 243)) 1;">
                            <img src="{{ URL::asset('storage/img/user1.png')}}"class=" m-auto rounded-circle " alt="..." style="width: 100px; height: 100px;">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="card-title">Nombre del artista</h5>
                                    <p class="card-text">Materiales con los que trabaja: Oleo</p>
                                    <a href="#" class="btn"><i class="fa-brands fa-instagram fs-1 me-3"></i> <i class="fa-brands fa-twitter fs-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="card shadow"  style=" border-style: solid; border-width: 10px;
                        border-image: linear-gradient(45deg, rgb(18, 10, 51), rgb(156, 37, 243)) 1;">
                            <img src="{{ URL::asset('storage/img/user1.png')}}" class="card-img-top m-auto rounded-circle " alt="..." style="width: 100px; height: 100px;">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="card-title">Nombre del artista</h5>
                                    <p class="card-text">Materiales con los que trabaja: Oleo</p>
                                    <a href="#" class="btn"><i class="fa-brands fa-instagram fs-1 me-3"></i> <i class="fa-brands fa-twitter fs-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card shadow"  style=" border-style: solid; border-width: 10px;
                        border-image: linear-gradient(45deg, rgb(18, 10, 51), rgb(156, 37, 243)) 1;">
                            <img src="{{ URL::asset('storage/img/user1.png')}}" class="card-img-top m-auto rounded-circle " alt="..." style="width: 100px; height: 100px;">
                            <div class="card-body">
                                <div class="card-title text-center">
                                    <h5 class="card-title">Nombre del artista</h5>
                                    <p class="card-text">Materiales con los que trabaja: Oleo</p>
                                    <a href="#" class="btn"><i class="fa-brands fa-instagram fs-1 me-3"></i> <i class="fa-brands fa-twitter fs-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous"></script>


    <script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
    </script>
</div>



{{-- @include('layouts.footer') --}}

@endsection


