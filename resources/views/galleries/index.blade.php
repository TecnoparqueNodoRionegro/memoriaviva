@extends('layouts.template')

@section('title', 'Murales')

@section('content')
<div class="container">
    @foreach ($categories as $category)
        <div class="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#{{ $category->id }}" aria-expanded="true" aria-controls="collapseOne">
                        {{ $category->description }}
                    </button>
                </h2>
                <div id="{{ $category->id }}" class="accordion-collapse collapse show">
                    <div class="accordion-body">
                        @foreach ($category->file as $file)
                            <img src="{{ $file->route }}">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@include('layouts.footer')
@endsection
