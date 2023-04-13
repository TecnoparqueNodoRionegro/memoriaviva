@extends('layouts.template')

@section('title', 'Murales')

@section('content')
<div class="container">
    @foreach ($categories as $category)

    <div class="card" style="width: 18rem;">
        <img src="" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</div>
@include('layouts.footer')
@endsection
