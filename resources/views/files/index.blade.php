@extends('layouts.template')

@section('title', 'Archivos')

@section('content')
    <body class="bg-white">
        <div class="container">
            <div class="text-center">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Archivo</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($files as $file) 
                            <tr>
                                <th scope="row">{{ $file->id }}</th>
                                @switch($file->file_type_id)
                                    @case(1)
                                        <td>
                                            <img class="w-50 h-50" src="{{ $file->route }}">
                                        </td>
                                        @break
                                    @case(2)
                                        <td>
                                            <a href="{{ $file->route }}" target="_blank">Video</a>
                                        </td>
                                        @break
                                    @case(3)
                                        <td>
                                            <audio src="{{ $file->route }}"></audio>
                                        </td>
                                        @break
                                    @default
                                @endswitch
                                <td>{{ $file->fileTypes->description }}</td>
                                <td>{{ $file->categories->description }}</td>
                                <td>{{ $file->states->description}}</td>
                                <td>
                                    <button class="btn btn-primary w-100 mb-1">Editar</button>
                                    <button class="btn btn-danger w-100">Eliminar</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="row w-50">
                    <div class="col-4">
                        {{ $files->links() }}
                    </div>
                    <a class="btn btn-dark mb-2 col-3" href="{{ route('files.create') }}">Subir un archivo</a>
                </div>
            </div>
        </div>  
    </body>
@endsection