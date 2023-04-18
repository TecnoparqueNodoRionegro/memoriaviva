@extends('layouts.template')

@section('title', 'Tienda')

@section('content')
    <style>
        .card{
            transition: 0.3s;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
    </style>

    <body class="bg-body-secondary">
        <div class="container">
            <form action="{{ route('products.index') }}" method="GET">
                <div class="d-flex text-center">
                    <input type="text" name="search" class="form-control" placeholder="Buscar" value="{{ $search }}">
                    <button type="submit" class="btn btn-dark mx-1"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
        </div>
        <div class="container">
            @if ($products->isEmpty())
                <h1 class="mt-3">No hay resultados.</h1>
            @else
                <div style="display: flex; flex-flow: row wrap;">
                    @foreach ($products as $product)
                        <a class="text-decoration-none" href="{{ route('products.show', $product) }}">
                            <div class="card m-3" style="width: 18rem;">
                                <img src="{{ URL::asset($product->files->route) }}" class="card-img-top object-fit-contain mb-2" style="height: 12rem;">
                                <div class="card-body border-top">
                                    <p class="card-text">$ {{ number_format($product->price, 0, ',', '.')}}</p>
                                    <p class="card-text">{{ $product->name }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
            {{ $products->links() }}
        </div>
    </body>
@endsection