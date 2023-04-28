@extends('layouts.template')

@section('title', 'Murales')

@section('content')

<link rel="stylesheet" href="{{ asset("styles/carrusel-artistas.css") }}">
<div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card">
                <div class="img-wrapper"><img src="storage/img/user1.png" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="storage/img/user1.png" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="storage/img/user1.png" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="storage/img/user1.png" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="storage/img/user1.png" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <div class="img-wrapper"><img src="storage/img/user1.png" class="d-block w-100" alt="..."> </div>
                <div class="card-body">
                    <h5 class="card-title">Card title 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

{{-- <hr width=95%  aling="center" style="height: 20px"> --}}


{{-- <div class="container-md" style="margin-top: 5px">

  @if ($categoryFiles->isEmpty())
    <div style="height: 30rem;">
      <h1 class="text-center text-white">Aún no hay galerías</h1>
    </div>
  @else
    <div class="galeria">
        <div class="w-100  h2 pb-2  mx-auto text-secondary border-bottom border-secondary">
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
                      <img src="{{ URL::asset($files[$loop->iteration-1]->route) }}" class="w-100 h-100 object-fit-cover card-img-top">
                    </div>
                  @endif

                  <div class="card-body">
                    <i class="fa-solid fa-folder"></i>
                    <span>{{ $category->description }}</span>
                  </div>
                </div>
              </a>
            </div>
          @endforeach
        </div>
    </div>
  @endif


  <div class="container">
    <div id="artistas">
        <div class="w-100  h2 pb-2  mx-auto text-secondary border-bottom border-secondary">
            Nuestros artistas vinculados
        </div>
        <div class="row">

            <div class="col-md-4 col-sm-12 mt-3">
                <div class="card text-center h-70 bg-light" >
                        <img src="{{ URL::asset('storage/img/user1.png')}}" class="card-img-top mt-4 m-auto rounded-circle " alt="..." style="width: 200px; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del artista</h5>
                        <p class="card-text">Materiales con los que trabaja: Oleo</p>
                        <a href="#" class="btn"><i class="fa-brands fa-instagram fs-1 me-3"></i> <i class="fa-brands fa-twitter fs-1"></i></a>
                    </div>
                    </div>
            </div>


            <div class="col-md-4 col-sm-12 mt-3">
                <div class="card text-center h-100 bg-light" >
                        <img src="{{ URL::asset('storage/img/1.jpg')}}" class="card-img-top mt-4 m-auto rounded-circle " alt="..." style="width: 200px; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del artista</h5>
                        <p class="card-text">Materiales con los que trabaja: Oleo</p>
                        <a href="#" class="btn"><i class="fa-brands fa-instagram fs-1 me-3"></i> <i class="fa-brands fa-twitter fs-1"></i></a>
                    </div>
                    </div>
            </div>


            <div class="col-md-4 col-sm-12 mt-3">
                <div class="card text-center h-100 bg-light" >
                        <img src="{{ URL::asset('storage/img/2.jpg')}}" class="card-img-top mt-4 m-auto rounded-circle " alt="..." style="width: 200px; height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">Nombre del artista</h5>
                        <p class="card-text">Materiales con los que trabaja: Oleo</p>
                        <a href="#" class="btn"><i class="fa-brands fa-instagram fs-1 me-3"></i> <i class="fa-brands fa-twitter fs-1"></i></a>
                    </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div> --}}



<script src="/public/js/slider-artista.js"></script>
{{-- @include('layouts.footer') --}}


@endsection
