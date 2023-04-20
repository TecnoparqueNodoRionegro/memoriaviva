@extends('layouts.template')

@section('title', $product->name)

@section('content')
    <body class="bg-light">
        
        @extends('layouts.templateProducts')

        @section('buttons')
            <a href="{{ route('pay.index', $product) }}">
                <button class="btn btn-dark">Comprar</button>
            </a>
            <button class="btn btn-dark mx-2">Añadir al carrito</button>
        @endsection

    </body>
@endsection