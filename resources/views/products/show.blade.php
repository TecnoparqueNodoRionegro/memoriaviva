@extends('layouts.template')

@section('title', $product->name)

@section('content')
    <body class="bg-light">

        @include('layouts.templateProducts')

        
        @section('buttons')
        
        @endsection

    </body>
    
@endsection
