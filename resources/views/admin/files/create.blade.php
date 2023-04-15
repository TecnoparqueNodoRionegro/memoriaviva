@extends('layouts.templateAdmin')

@section('title', 'Subir archivo')

@section('content')
    <div class="menuLateral" id="menuLateral">

        <header>@include('layouts.navAdmin')</header>

        <form action="{{route('admin.files.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="card container position-absolute top-50 start-50 translate-middle mt-5 mx-5">
                <h1 class="text-center mt-1 card-header">Subir archivo</h1>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <label class="form-label mt-2">Tipo de recurso:</label>
                            <select class="form-select" id="resource_type" name="resourceType">
                                <option value="0" selected disabled>Selecciona...</option>
                                <option value="1">Archivo</option>
                                <option value="2">URL externa</option>
                            </select>
                        </div>
    
                        <div class="col-6" id="file">
                            <label class="form-label mt-2">Archivo:</label>
                            <input class="form-control" type="file" name="routeFiles[]" multiple>
                        </div>
    
                        <div class="col-6" id="url">
                            <label class="form-label mt-2">URL:</label>
                            <input class="form-control" type="text" name="routeUrl">
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-4">
                            <label class="form-label mt-2">Categoría:</label>
                            <select class="form-select" name="categoryFile">
                                <option disabled selected>Selecciona...</option>
                                @foreach ($categoryFiles as $category)
                                    <option value="{{$category->id}}">{{$category->description}}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="col-4">
                            <label class="form-label mt-2">Tipo de archivo:</label>
                            <select class="form-select" name="fileType">
                                <option disabled selected>Selecciona...</option>
                                @foreach ($fileTypes as $fileType)
                                    <option value="{{$fileType->id}}">{{$fileType->description}}</option>
                                @endforeach
                            </select>
                        </div>
    
                        <div class="col-4">
                            <label class="form-label mt-2">Estado:</label>
                            <select class="form-select" name="state">
                                <option disabled selected>Selecciona...</option>
                                @foreach ($states as $state)
                                    <option value="{{$state->id}}">{{$state->description}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="text-center mt-3">
                        <button class="btn btn-primary w-50" type="submit">Enviar</button>
                        <a href="{{ route('admin.files.index') }}">
                            <button class="btn btn-light">Regresar</button>
                        </a>
                    </div>
                </div>
            </div>
        </form>

        {{-- JQuery --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <script>
            $(document).ready(function(){

                $("#file").hide();
                $("#url").hide();

                $("#resource_type").change(function(){

                    resourceType = $("#resource_type").val();

                    if(resourceType == 1){
                        $("#file").show();
                        $("#url").hide();
                    } else if(resourceType == 2){
                        $("#file").hide();
                        $("#url").show();
                    }
                });
            });
        </script>
    </div>
@endsection