@extends('layouts.template')
@section('content')
    <body class="bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <h2>Carrito De Compras</h2>
                @if (count(Cart::getContent()))
                    <table>
                        <thead>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>PRECIO</th>
                            <th>CANTIDAD</th>
                            <th>TOTAL POR PRODUCTO</th>
                        </thead>
                        <tbody>
                            @php $total = 0 @endphp <!-- Inicializa variable total -->
                            @foreach(Cart::getContent() as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>$ {{ number_format($item->price) }}</td>
                                    <td>{{ $item->quantity }}</td>
                                    <td>${{ number_format(($subtotal=$item->price * $item->quantity))}}</td> <!-- Calcula subtotal de cada producto -->
                                    <td>
                                        <form action="{{ route('cart.removeitem')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id}}">
                                            <button class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Desea eliminar articulo?');"><i class="fas fa-trash-alt"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @php $total += $subtotal @endphp <!-- Acumula subtotal en variable total -->
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-end">
                        <h4>Total del carrito: ${{ number_format($total) }}</h4> <!-- Muestra total del carrito -->
                        <form action="{{ route('pay.payu') }}" method="post">
                            @csrf
                            <input type="hidden" name="total" value="{{ $total }}">
                            <input type="submit" value="Comprar" class="btn btn-dark">
                        </form>
                    </div>
                @else
                <div class="alert alert-danger text-center" role="alert">
                    Carrito vacío
                </div>
                @endif
            </div>
        </div>
    </body>
@endsection