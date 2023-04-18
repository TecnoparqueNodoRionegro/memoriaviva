@extends('layouts.templateAdmin')

@section('title', $product->name)

@section('content')
    <div class="contenedor" id="contenedor">
            
        <div class="menuLateral" id="menuLateral">

            <header>@include('layouts.navAdmin')</header>
            
            <div class="container bg-white p-5 border rounded my-3">
                @include('layouts.templateProducts')
                
                <div class="my-3">
                    <a href="{{ route('admin.products.index') }}">
                        <button class="btn btn-dark">Regresar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection