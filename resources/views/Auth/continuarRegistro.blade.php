@extends('layouts.template')

@section('title', 'Tienda')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 mt-5">
      <div class="card">
        <div class="card-header bg-dark text-white">
          <h2 class="text-center">Continua con tu registro</h2>
        </div>
        <div class="card-body">
        <form class="needs-validation" method="post" action="{{ route('dataUsers')}}" novalidate>
        @csrf
  <div class="mb-3">
    <label for="email">Nombre:</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese su Nombre" required>
    
  </div>
  <div class="mb-3">
    <label for="last_name">Apellido:</label>
    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ingrese su Apellido" required>
  </div>
  <div class="mb-3">
    <label for="gender">Genero:</label>
    Masculino <input type="radio" value="Masculino" name="gender" id="gender">
    Femenino <input type="radio" name="gender" value="Femenino" id="gender">
  </div>
  <div class="mb-3">
    <label for="phone">Telefono:</label>
    <input type="text" class="form-control" name="phone" id="phone" placeholder="Ingrese su telefono" required>
    
  </div>
  <input type="hidden" value="{{ session('id') }}" name="id_user">
  <button type="submit" class="btn btn-dark btn-block">Terminar Registro</button>
</form>

        </div>
      </div>
    </div>
  </div>
</div>

@endsection