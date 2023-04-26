<div>
    <div class="container">
        <div class="row bg-white rounded shadow p-5">
            <div class="col-6" style="width: 600px; height: 300px;">
                <img class="object-fit-scale w-100 h-100" src="{{ $product->files->route }}">
            </div>
            
            <div class="d-flex align-items-center col-6">
                <div>
                    <h1>{{ $product->name }}</h1>
                    <p>{{ $product->description }}</p>
                    <h2>$ {{ number_format($product->price, 0, ',', '.')}}</h2>
                    <div class="d-flex">
                        @yield('buttons')
                    </div>
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