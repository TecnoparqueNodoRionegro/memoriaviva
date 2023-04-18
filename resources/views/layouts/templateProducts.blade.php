<div>
    <div class="d-flex">
        <div class="w-50">
            <img class="rounded w-100" src="{{ $product->files->route }}">
        </div>
        <div class="mx-5">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->description }}</p>
            <h1>Precio:</h1>
            <p>$ {{ number_format($product->price, 0, ',', '.')}}</p>
        </div>
    </div>
</div>