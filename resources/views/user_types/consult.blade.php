@extends('layouts.templateAdmin')

@section('title', 'Panel Administrativo')

@section('content')
    <div class="contenedor" id="contenedor">

        <div class="d-flex">

            {{--Menú Lateral--}}
            <div class="menuLateral" id="menuLateral">

                <header>@include('layouts.navAdmin')</header>

                   {{--contenido--}}
                   <div id="content">
                        <section class="py-5">
                             <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                    <h2>Roles del sistema</h2>
                                        <table class="table table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Nombre</th>
                                                <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($user_types as $user)
                                            <tr>
                                                
                                                    <th>{{ $user->id }}</th>
                                                    <th>{{ $user->description }}</th>
                                                    <th>
                                                        <a href="{{ route('user_types_edit', $user->id)}}" class="btn btn-dark btn-sm">
                                                            <i class="fas fa-edit"></i> Editar
                                                        </a>
                                                        <a href="" class="btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i> Eliminar
                                                        </a>
                                                    </th>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        </table> 
                                        <div class="pagination">
                                            {{ $user_types->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
             </div>
        </div>
    </div>
</div>
@endsection