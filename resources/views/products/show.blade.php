@extends('layouts.template')

@section('title', $product->name)

@section('content')
    <body class="bg-light">
        
        @extends('layouts.templateProducts')
        
        @section('buttons')
        
            <a href="{{ route('pay.index', $product) }}">
                <button class="btn btn-dark">Comprar</button>
            </a>
            <form action="{{ route('cart.add')}}" method="post">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id}}">
                <button class="btn btn-dark mx-2">Añadir al carrito</button>
            </form>
            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @endsection

    </body>
@endsection