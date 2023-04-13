@extends('layouts.template')

@section('title', 'Murales')

@section('content')
<div class="container mb-5">
    <div>
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
</div>
@include('layouts.footer')
@endsection
