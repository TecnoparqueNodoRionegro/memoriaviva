@extends('layouts.template')

@section('title', 'Murales')

@section('content')
<div class="container">

    <div class="row">
    @foreach ($categories as $category)
    <div class="col card m-3" style="width: 18rem; background-color: rgb(28, 28, 28)">
        <img src="{{ URL::asset('storage/img/sliders02.png') }}" class="card-img-top p-2 rounded mt-3">
        <div class="card-body text-center">
            <a href="#" class="btn btn-secondary" style="color: black">Galeria 1</a>
        </div>
    </div>
    @endforeach
    </div>
</div>
@include('layouts.footer')
@endsection
