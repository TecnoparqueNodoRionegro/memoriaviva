@extends('layouts.template')

@section('title', $category->description)

@section('content')
{{  $q }}
    {{-- @foreach ($files as $file)
        @if ($file->category_file_id == $category->id)
            <img src="{{ $file->route }}">
        @endif
    @endforeach --}}
@include('layouts.footer')
@endsection
