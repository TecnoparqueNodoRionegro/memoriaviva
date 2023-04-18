@extends('layouts.template')

@section('title', $product->name)

@section('content')
    <body class="bg-light">

        <div class="container bg-white p-5 border rounded my-3">
            @include('layouts.templateProducts')

                <div class="my-3">
                    <a href="{{ route('products.index') }}">
                        <button class="btn btn-dark">Regresar</button>
                    </a>
                </div>
        </div>
    </body>
@endsection