@extends('layouts.template')

@section('title', 'Murales')

@section('content')
<div class="container mb-5">
    <div id="galeria">
        <div class="row">

            @foreach ($categories as $category)
                <div class="col-md-4 mb-4"   >

                        <a href="#" class="btn text-white fs-4" style="font-family: font-family: 'Roboto', sans-serif;">
                            <img src="{{ URL::asset('storage/img/sliders02.png') }}" class="card-img-top w-100">
                            <i class="fa-solid fa-folder"></i>
                            <span>Galería 1  </span>
                        </a>
                    </div>
            @endforeach


        </div>
    </div>

    <div id="artistas">
        <div class="text-center text-white m-3">
            <h1 class="fs-1">Nuestros artistas vinculados:</h1>
        </div>
        <div class="row">

            <div class="col-md-4 col-sm-12">

                <div class="card text-center h-100 bg-light" >
                        <img src="{{ URL::asset('storage/img/user1.png')}}" class="card-img-top mt-4 m-auto rounded-circle " alt="..." style="width: 200px; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del artista</h5>
                      <p class="card-text">Materiales con los que trabaja: Oleo</p>
                      <a href="#" class="btn"><i class="fa-brands fa-instagram fs-1 me-3"></i> <i class="fa-brands fa-twitter fs-1"></i></a>
                    </div>
                  </div>
            </div>


            <div class="col-md-4 col-sm-12">
                <div class="card text-center h-100 bg-light" >
                        <img src="{{ URL::asset('storage/img/1.jpg')}}" class="card-img-top mt-4 m-auto rounded-circle " alt="..." style="width: 200px; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del artista</h5>
                      <p class="card-text">Materiales con los que trabaja: Oleo</p>
                      <a href="#" class="btn"><i class="fa-brands fa-instagram fs-1 me-3"></i> <i class="fa-brands fa-twitter fs-1"></i></a>
                    </div>
                  </div>
            </div>


            <div class="col-md-4 col-sm-12">
                <div class="card text-center h-100 bg-light" >
                        <img src="{{ URL::asset('storage/img/2.jpg')}}" class="card-img-top mt-4 m-auto rounded-circle " alt="..." style="width: 200px; height: 200px;">
                    <div class="card-body">
                      <h5 class="card-title">Nombre del artista</h5>
                      <p class="card-text">Materiales con los que trabaja: Oleo</p>
                      <a href="#" class="btn"><i class="fa-brands fa-instagram fs-1 me-3"></i> <i class="fa-brands fa-twitter fs-1"></i></a>
                    </div>
                  </div>
            </div>

            <div class="d-flex justify-content-center mt-4 bg-black text-white">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item"><a class="page-link bg-black text-white" href="#"><i class="fa-solid fa-circle-chevron-left"></i></a></li>
                      <li class="page-item"><a class="page-link page-link bg-black text-white" href="#">1</a></li>
                      <li class="page-item"><a class="page-link page-link bg-black text-white" href="#">2</a></li>
                      <li class="page-item"><a class="page-link page-link bg-black text-white" href="#">3</a></li>
                      <li class="page-item"><a class="page-link page-link bg-black text-white" href="#"><i class="fa-solid fa-circle-chevron-right"></i></a></li>
                    </ul>
                  </nav>
            </div>


        </div>
    </div>

</div>

@include('layouts.footer')


@endsection
