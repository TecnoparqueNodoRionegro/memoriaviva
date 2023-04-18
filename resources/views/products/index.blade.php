@extends('layouts.template')

@section('title', 'Tienda')

@section('content')
<body class="bg-body-secondary">
    <div class="container">
        @if ($products->isEmpty())
            <h1 class="mt-3">Aún no hay productos</h1>
        @else
            <div style="display: flex; flex-flow: row wrap">
                @foreach ($products as $product)
                    <div class="card m-3" style="width: 18rem;">
                        <img src="{{ URL::asset($product->file->route) }}" class="card-img-top object-fit-contain border-bottom" style="height: 12rem;">
                        <div class="card-body">
                            <p class="card-text">$ {{ number_format($product->price, 2, ',', '.')}}</p>
                            <p class="card-text">{{ $product->name }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
        {{ $products->links() }}
    </div>
</body>
@endsection