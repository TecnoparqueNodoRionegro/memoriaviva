<div>
    <div class="container">
        <div class="d-flex bg-white rounded shadow p-5">
            <div class="w-100">
                <img class="rounded w-100" src="{{ $product->files->route }}">
            </div>
            <div class="mx-5">
                <h1>{{ $product->name }}</h1>
                <p>{{ $product->description }}</p>
                <h2 class="col-3">$ {{ number_format($product->price, 0, ',', '.')}}</h2>
                <div class="d-flex">
                    <a href="{{ route('pay.index', $product) }}">
                        <button class="btn btn-dark">Comprar</button>
                    </a>
                    <button class="btn btn-dark mx-2">Añadir al carrito</button>
                </div>
            </div>
        </div>
        <div class="my-3">
            <a href="{{ url()->previous() }}">
                <button class="btn btn-dark">Regresar</button>
            </a>
        </div>
    </div>
</div>