@extends('layouts.templateAdmin')

@section('title', 'Archivos')

@section('content')
    <div class="menuLateral" id="menuLateral">

        <header>@include('layouts.navAdmin')</header>
        <div class="container p-5">
            <div class="m-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($files as $file) 
                            <tr>
                                <td>{{ $file->id }}</td>
                                <td>{{ $file->name }}</td>
                                <td>{{ $file->fileTypes->description }}</td>
                                <td>{{ $file->categories->description }}</td>
                                <td>{{ $file->states->description}}</td>
                                <td width="320">
                                    <form action="{{ route('admin.files.destroy', $file) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        
                                        <a class="btn btn-success w-25" href="{{ URL::asset($file->route) }}" target="_blank">Ver</a>
                                        <a class="btn btn-primary w-25" href="{{ route('admin.files.edit', $file) }}">Editar</a>
                                        <button class="btn btn-danger w-25" type="submit">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex">
                    <div class="">
                        {{ $files->links() }}
                    </div>
                    <a class="mx-5" href="{{ route('admin.files.create') }}">
                        <button class="btn btn-primary">Subir un archivo</button>
                    </a>
                    <a href="{{ url('/admin') }}">
                        <button class="btn btn-primary">Regresar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection