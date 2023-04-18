@extends('layouts.templateAdmin')

@section('title', 'Actualizar archivo')

@section('content')
    <div class="contenedor" id="contenedor">
        <div class="menuLateral" id="menuLateral">

            <header>@include('layouts.navAdmin')</header>

            <div class="card container mt-5">
                <div class="card-body">
                    <form action="{{ route('admin.files.update', $file) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <h1 class="text-center mt-1 card-header">Actualizar archivo</h1>
                        <div class="text-center"> 
                            @switch($file->file_type_id)
                                @case(1)
                                <div>
                                    <img class="w-50" src="{{ URL::asset($file->route) }}">
                                </div>
                                <small>{{ $file->name }}</small>
                                    @break
                                @case(2)
                                    <a href="{{ $file->route }}" target="_blank">Video</a>
                                    @break
                                @case(3)
                                        <audio src="{{ $file->route }}"></audio>
                                    @break
                                @default
                            @endswitch
                        </div>

                        <div class="row mt-3">
                            <div class="col-6">
                                <label class="form-label mt-2">Categoría:</label>
                                <select class="form-select" name="categoryFile">
                                    @foreach ($categoryFiles as $categoryFile)
                                        @if ($categoryFile->id == $file->categories->id)
                                            <option value="{{$categoryFile->id}}" selected>{{ $file->categories->description }}</option>
                                        @else
                                            <option value="{{$categoryFile->id}}">{{$categoryFile->description}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
        
                            <div class="col-6">
                                <label class="form-label mt-2">Estado:</label>
                                <select class="form-select" name="state">
                                    @foreach ($states as $state)
                                        @if ($state->id == $file->states->id)
                                            <option value="{{ $state->id }}" selected>{{ $file->states->description }}</option>
                                        @else
                                            <option value="{{ $state->id }}">{{$state->description}}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="text-center mt-3">
                            <button class="btn btn-dark w-50" type="submit" id="editButton">Enviar</button>
                        </div>   
                    </form>
                    <a href="{{ route('admin.files.index') }}">
                        <button class="btn btn-light">Regresar</button>
                    </a>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
        </div>
    </div>
@endsection