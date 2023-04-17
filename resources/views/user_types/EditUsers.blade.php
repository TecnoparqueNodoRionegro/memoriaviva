@extends('layouts.templateAdmin')

@section('title', 'Crear Categoría')

@section('content')
    <div class="contenedor" id="contenedor">

        <div class="d-flex">

            {{--Menú Lateral--}}
            <div class="menuLateral" id="menuLateral">

                <header>@include('layouts.navAdmin')</header>


                    {{--Aqui va el contenido a mostrar en la pagina--}}
                   <div id="content">
                        <section class="py-5">
                            <div class="container d-flex justify-content-center">
                                <div class="card w-75 col-sm-12">
                                    <div class="card-body">
                                    <form method="post" action="{{ route('data_users_update', $id->id )}}">
                                    @csrf
                                    @method('PUT')
                                        <h2>Actualizar tipo de rol</h2>
                                        <div class="form-group mb-3">
                                            <label for="tipo-usuario">Nombre</label>
                                            <input type="text" class="form-control" id="tipo-usuario" value="{{ $id->name}}" name="name">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="tipo-usuario">Apellido</label>
                                            <input type="text" class="form-control" id="tipo-usuario" value="{{ $id->last_name}}" name="last_name">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="tipo-usuario">Telefono</label>
                                            <input type="text" class="form-control" id="tipo-usuario" value="{{ $id->phone}}" name="phone">
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="submit" class="btn btn-dark" value="Actualizar"> 
                                        </div>
                                    </form>
                                    </div>
                                </div>

                            </div>
                        </section>
                        {{-- contenido --}}
                    </div>
            </div>

        </div>
    </div>
@endsection
