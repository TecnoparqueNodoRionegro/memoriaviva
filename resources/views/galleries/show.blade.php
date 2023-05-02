@extends('layouts.template')

@section('title', $category->description)

@section('content')

  {{-- <section>

    <div class="container">
        <style>
            img{
                transition: 300ms;
            }

            img:hover{
                opacity: 0.5;
            }
        </style>

      @if ($files->isEmpty())
        <div style="height: 20rem;">
          <h1 class="text-center text-white">Aún no hay imágenes en {{ $category->description }}</h1>
        </div>
      @else
        <div class="d-flex gap-1">
          <div class="w-25">
            @foreach ($files1 as $file1)
              <img src="{{ URL::asset($file1->route) }}" class="w-100 rounded object-fit-cover m-1">
            @endforeach
          </div>

          <div class="w-25">
            @foreach ($files2 as $file2)
              <img src="{{ URL::asset($file2->route) }}" class="w-100 rounded object-fit-cover m-1">
            @endforeach
          </div>

          <div class="w-25">
            @foreach ($files3 as $file3)
              <img src="{{ URL::asset($file3->route) }}" class="w-100 rounded object-fit-cover m-1">
            @endforeach
          </div>

          <div class="w-25">
            @foreach ($files4 as $file4)
              <img src="{{ URL::asset($file4->route) }}" class="w-100 rounded object-fit-cover m-1">
            @endforeach
          </div>
        </div>
      @endif
    </div>
  </section> --}}
<link rel="stylesheet" type="text/css" href="css/style.css">


<style>

img{
    transition: 300ms;
}

img:hover{
    opacity: 0.5;
}

img{
    max-width: 100%;
}
.gallery{
    padding: 80px 0;
}
.gallery img{
    background-color: rgb(228, 228, 228);
    padding: 15px;
    width: 100%;
    box-shadow: 0 0 15px rgba(0,0,0,0.3);
    cursor: pointer;
}
#gallery-modal .modal-img{
    width: 100%;
}
</style>

<div class="container">

  @if ($files->isEmpty())
  <div style="height: 20rem;">
    <h1 class="text-center text-white">Aún no hay imágenes en {{ $category->description }}</h1>
  </div>
  @else

    <section class="gallery min-vh-100">
      <div class="container-lg">
        <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
            <div class="col">
              @foreach ($files1 as $file1)
              <img src="{{ URL::asset($file1->route) }}" class="w-100 rounded object-fit-cover m-1 gallery-item" alt="gallery"  style=" border-style: solid; border-width: 10px;
              border-image: linear-gradient(45deg, rgb(18, 10, 51), rgb(156, 37, 243)) 1;">
              @endforeach
            </div>
            <div class="col">
              @foreach ($files2 as $file2)
              <img src="{{ URL::asset($file2->route) }}" class="w-100 rounded object-fit-cover m-1 gallery-item" alt="gallery"  style=" border-style: solid; border-width: 10px;
              border-image: linear-gradient(45deg, rgb(18, 10, 51), rgb(156, 37, 243)) 1;">
              @endforeach
            </div>
            <div class="col">
              @foreach ($files3 as $file3)
              <img src="{{ URL::asset($file3->route) }}" class="w-100 rounded object-fit-cover m-1 gallery-item" alt="gallery"  style=" border-style: solid; border-width: 10px;
              border-image: linear-gradient(45deg, rgb(18, 10, 51), rgb(156, 37, 243)) 1;">
              @endforeach
            </div>
            <div class="col">
              @foreach ($files4 as $file4)
              <img src="{{ URL::asset($file4->route) }}" class="w-100 rounded object-fit-cover m-1 gallery-item" alt="gallery" style=" border-style: solid; border-width: 10px;
              border-image: linear-gradient(45deg, rgb(18, 10, 51), rgb(156, 37, 243)) 1;">
              @endforeach
            </div>
        </div>
      </div>
  </section>

  <!-- Modal -->
  <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content" style=" border-style: solid; border-width: 10px;
    border-image: linear-gradient(45deg, rgb(18, 10, 51), rgb(156, 37, 243)) 1;">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <img src="img/1.jpg" class="modal-img" alt="modal img">
      </div>
    </div>
  </div>
  </div>
  <script src="js/main.js"></script>

  <script>
  document.addEventListener("click",function (e){
    if(e.target.classList.contains("gallery-item")){
        const src = e.target.getAttribute("src");
        document.querySelector(".modal-img").src = src;
        const myModal = new bootstrap.Modal(document.getElementById('gallery-modal'));
        myModal.show();
    }
  })
  </script>
@endif
{{-- @include('layouts.footer') --}}
@endsection
