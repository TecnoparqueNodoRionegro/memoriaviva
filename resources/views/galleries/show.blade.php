@extends('layouts.template')

@section('title', $category->description)

@section('content')

    {{-- @foreach ($files as $file)
        @if ($file->category_file_id == $category->id)
            <img src="{{ $file->route }}">
        @endif
    @endforeach --}}


    <section class="gallery ">
		<div class="container-lg">
			<div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3 ">

				<div class="col">
					<img src="{{ URL::asset('storage/img/sliders02.png') }}" class="gallery-item w-100 rounded" alt="Gallery1">
				</div>

				<div class="col">
					<img src="{{ URL::asset('storage/img/sliders01.png') }}" class="gallery-item w-100 rounded" alt="Gallery2">
				</div>

				<div class="col">
					<img src="{{ URL::asset('storage/img/sliders03.png') }}" class="gallery-item w-100 rounded" alt="Gallery2">
				</div>

				<div class="col">
					<img src="{{ URL::asset('storage/img/sliders03.png') }}" class="gallery-item w-100 rounded" alt="Gallery2">
				</div>

				<div class="col">
					<img src="{{ URL::asset('storage/img/1.jpg') }}" class="gallery-item w-100 rounded" alt="Gallery2">
				</div>


			</div>
		</div>
	</section>
    <div class="modal fade" id="gallery-popup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
          <div class="modal-content  bg-grey">
            <div class="modal-header">
              <button type="button" class="btn-close btn btn-light"  data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{ URL::asset('storage/img/sliders01.png') }}" class="modal-img w-100 rounded" alt="Modal Image">
                      </div>
                      <div class="carousel-item active">
                        <img src="{{ URL::asset('storage/img/sliders02.png') }}" class="modal-img w-100 rounded" alt="Modal Image">
                      </div>
                      <div class="carousel-item active">
                        <img src="{{ URL::asset('storage/img/sliders03.png') }}" class="modal-img w-100 rounded" alt="Modal Image">
                      </div>

                      <div class="carousel-item active">
                        <img src="{{ URL::asset('storage/img/sliders03.png') }}" class="modal-img w-100 rounded" alt="Modal Image">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>


            </div>
          </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript">
        document.addEventListener("click",function (e){
        if(e.target.classList.contains("gallery-item")){
                const src = e.target.getAttribute("src");
                document.querySelector(".modal-img").src = src;
                const myModal = new bootstrap.Modal(document.getElementById('gallery-popup'));
                myModal.show();
        }
        })
    </script>
@include('layouts.footer')
@endsection
