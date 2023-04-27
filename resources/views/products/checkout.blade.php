@extends('layouts.template')

@section('title', $product->name)

@section('content')
    <body class="bg-light">
        
        @extends('layouts.templateProducts')
        
        @section('buttons')
        
            @if (count(Cart::getContent()))
            <a href="{{ route('cart.checkout')}}">ver carrito<span class="banger banger-danger">{{ count(Cart::getContent())}}></span></a>
                
            @else
               <p>carrito vacio</p>
            
            @endif
        @endsection

    </body>
@endsection