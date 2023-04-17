@extends('layouts.templateAdmin')

@section('title', 'Subir archivo')

@section('content')
    <div class="contenedor" id="contenedor">
        
        <div class="menuLateral" id="menuLateral">

            <header>@include('layouts.navAdmin')</header>

            @if ($products->isEmpty())
                <div class="text-center mt-5">    
                    <h1>Aún no has publicado productos</h1>
                    <a href="{{ route('admin.products.create') }}">
                        <button class="btn btn-primary">Publicar productos</button>
                    </a>
                </div>
            @else
                <div class="container mt-5">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Cantidad</th>
                                <th>Stock</th>
                                <th>Estado</th>
                                <th>Categoría</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)    
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>
                                        <div style="width: 230px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">
                                            {{ $product->description }}
                                        </div>
                                    </td>
                                    <td>$ {{ number_format($product->price, 2, ',', '.') }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->states->description }}</td>
                                    <td>{{ $product->categories->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex">
                        <div>
                            {{ $products->links() }}
                        </div>
                        <a class="mx-5" href="{{ route('admin.products.create') }}">
                            <button class="btn btn-primary">Publicar producto</button>
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection