@extends('layouts.templateAdmin')

@section('title', $product->name)

@section('content')
    <div class="contenedor" id="contenedor">
            
        <div class="menuLateral" id="menuLateral">

            <header>@include('layouts.navAdmin')</header>
            
            @include('layouts.templateProducts')
        </div>
    </div>
@endsection