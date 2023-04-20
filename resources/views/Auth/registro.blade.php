@extends('layouts.template')

@section('title', 'Tienda')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5 mt-5">
      <div class="card">
        <div class="card-header bg-dark text-white">
          <h2 class="text-center">Registrate</h2>
        </div>
        <div class="card-body">
        <form class="needs-validation" method="post" action="{{ url('auth/registroVerify')}}" novalidate>
        @csrf
              <div class="mb-3">
                <label for="email">Correo electrónico:</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su correo electrónico" required>
                <div class="invalid-feedback">
                  Por favor ingrese una dirección de correo electrónico válida.
                </div>
              </div>
              <div class="mb-3">
                <label for="password1">Contraseña:</label>
                <input type="password" class="form-control" name="password" id="password1" placeholder="Ingrese su contraseña" required>
                <div class="invalid-feedback">
                  Por favor ingrese una contraseña.
                </div>
              </div>
              <div class="mb-3">
                <label for="password2">Confirmar contraseña:</label>
                <input type="password" class="form-control" name="passwordConfirmation" id="password2" placeholder="Confirme su contraseña" required data-match="#password1">
                <input type="hidden" name="user_type_id" value="2">
                <div class="invalid-feedback">
                  Por favor confirme su contraseña.
                </div>
              </div>
              <button type="submit" class="btn btn-dark btn-block">Registrate</button>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    //validacion de campos
    (function() {

  'use strict';

 
  var forms = document.querySelectorAll('.needs-validation');

  
  Array.prototype.slice.call(forms)
    .forEach(function(form) {
      form.addEventListener('submit', function(event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

      
        if (form.querySelector('#password1').value !== form.querySelector('#password2').value) {
          form.querySelector('#password2').setCustomValidity("Las contraseñas no coinciden");
        } else {
          form.querySelector('#password2').setCustomValidity("");
        }

        form.classList.add('was-validated');
      }, false);
    });
})();

</script>
@endsection