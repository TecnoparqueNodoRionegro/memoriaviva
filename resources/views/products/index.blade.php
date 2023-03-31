@extends('layouts.template')

@section('title', 'Tienda')

@section('content')
<div class="bg-body-secondary">
    <div style="display: flex; flex-flow: row wrap; justify-content: center;">
        @foreach ($products as $product)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{ $product->cover_page_url }}" class="card-img-top" style="height: 12rem">
                <div class="card-body">
                <p class="card-text">$ {{ number_format($product->price, 2, ',', '.')}}</p>
                <p class="card-text">{{ $product->name }}</p>
                </div>
            </div>
        @endforeach
    </div>
    {{ $products->links() }}
</div>
@endsection