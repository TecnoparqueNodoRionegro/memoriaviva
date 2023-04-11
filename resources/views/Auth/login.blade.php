@extends('layouts.template')

@section('title', 'Tienda')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 mt-5">
      <div class="card">
        <div class="card-header bg-dark text-white">
          <h2 class="text-center">Inicio de sesión</h2>
        </div>
        @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <div class="card-body">
          <form action="{{ route('auth.loginVerify')}}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Correo electrónico</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-dark btn-block">Iniciar sesión</button>
          </form>
        </div>
        <div class="card-footer">
          <p class="text-center">¿No tienes cuenta? <a href="{{ url('auth/registro')}}">Regístrate aquí</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection