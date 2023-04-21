@extends('layouts.template')

@section('title', $category->description)

@section('content')
  <section>

    <div class="container">
      <div class="row">

        @foreach ($files as $file)
          <div class="col-xl-4 col-lg-6 col-md-12 mb-3">
            <div style="height: 300px;">
              <img src="{{ URL::asset($file->route) }}" class="w-100 h-100 rounded object-fit-cover" data-bs-toggle="modal" data-bs-target="#modalImage{{$file->id}}">
            </div>
          </div>

          <!-- Modal para la imagen -->
          <div class="modal fade" id="modalImage{{$file->id}}" tabindex="-1" role="dialog" aria-labelledby="modalImageLabel{{$file->id}}">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="modalImageLabel{{$file->id}}">Imagen {{$file->id}}</h5>
                </div>
                <div class="modal-body container" style="width: 500px; height: 500px;">
                  <img src="{{ URL::asset($file->route) }}" class="w-100 h-100 rounded object-fit-scale">
                </div>
                <div class="modal-footer">
                  <button class="btn btn-dark" data-bs-dismiss="modal">
                    <span aria-hidden="true">Cerrar</span>
                  </button>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </section>
@include('layouts.footer')
@endsection
