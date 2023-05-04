@extends('layouts.template')

@section('title', 'Editar datos')

@section('content')
    <div id="content">
        <section class="py-5">
            <div class="container d-flex justify-content-center">
                <div class="card w-75 col-sm-12">
                    <div class="card-body">
                        <form method="post" action="{{ route('user_profile.update', Auth::user()->id) }}">
                            @csrf
                            @method('PUT')
                            <h2>Actualizar datos de usuario</h2>
                            <div class="form-group mb-3">
                                <label for="tipo-usuario">Correo</label>
                                <input type="text" class="form-control" id="tipo-usuario" value="{{ Auth::user()->email }}" disabled>
                            </div>

                            @foreach ($data_user as $data)
                                
                                <div class="form-group mb-3">

                                        <label for="tipo-usuario">Nombre</label>
                                        <input type="text" class="form-control" id="tipo-usuario" value="{{ $data->name }}" name="name">

                                        <div class="form-group mb-3">
                                            <label for="tipo-usuario">Apellido</label>
                                            <input type="text" class="form-control" id="tipo-usuario" value="{{ $data->last_name }}" name="last_name">
                                        </div>

                                        <div class="mb-3">
                                            <label for="gender" class="form-label">Género:</label>
                                            <span id="gender-error" class="text-danger"></span>
                                            <div class="form-check">
                                                <input selected class="form-check-input" type="radio" name="gender" id="male" value="Masculino" @if($data->gender == "Masculino") checked @endif>
                                                <label class="form-check-label" for="male">
                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gender" id="female" value="Femenino" @if($data->gender == "Femenino") checked @endif>
                                                <label class="form-check-label" for="female">
                                                    Femenino
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="tipo-usuario">Telefono</label>
                                            <input type="text" class="form-control" id="tipo-usuario" value="{{ $data->phone}}" name="phone">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label for="tipo-usuario">Redes sociales</label>
                                            <input type="text" class="form-control" name="facebook">
                                            <input type="text" class="form-control" name="youtube">
                                            <input type="text" class="form-control" name="instagram">
                                            <input type="text" class="form-control" name="twitter">
                                        </div>
                                    </div>
                                @endforeach
                            <div class="form-group mb-3">
                                <input type="submit" class="btn btn-dark" value="Continuar"> 
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection