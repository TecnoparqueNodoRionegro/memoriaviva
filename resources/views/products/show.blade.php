@extends('layouts.template')

@section('title', $product->name)

@section('content')
    <body class="bg-light">
        @include('layouts.templateProducts')
    </body>
@endsection