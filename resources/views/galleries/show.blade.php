@extends('layouts.template')

@section('title', $category->description)

@section('content')

  <section>

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
  </section>
{{-- @include('layouts.footer') --}}
@endsection
