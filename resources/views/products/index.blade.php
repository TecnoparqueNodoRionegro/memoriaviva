@extends('layouts.template')

@section('title', 'Tienda')

@section('content')
<body class="bg-body-secondary">
    <div style="display: flex; flex-flow: row wrap; justify-content: center;">
        @if (count($products) <= 0)
            <h1 class="mt-3">Aún no hay productos</h1>
        @else
            @foreach ($products as $product)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{ $product->cover_page_url }}" class="card-img-top object-fit-contain border-bottom" style="height: 12rem;">
                    <div class="card-body">
                    <p class="card-text">$ {{ number_format($product->price, 2, ',', '.')}}</p>
                    <p class="card-text">{{ $product->name }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    {{ $products->links() }}
</body>
@endsection