@extends('layouts.template')

@section('title', 'Murales')

@section('content')
<div class="container mb-5">
    <div id="galeria">
        <div class="row">
          @foreach ($categoryFiles as $category)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
              <a href="{{ route('galleries.show', $category) }}" class="text-decoration-none">
                <div class="card text-secondary">
                    @foreach ($files as $file) 
                      @if ($file->category_file_id == $category->id)
                      <div style="height: 200px;">
                        <img src="{{ URL::asset($file->route) }}" class="w-100 h-100 object-fit-cover card-img-top">
                      </div>
                      @endif
                    @endforeach
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
        </div>
    </div>
</div>

@include('layouts.footer')


@endsection
