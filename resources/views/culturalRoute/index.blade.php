@extends('layouts.template')

@include('layouts.nav')

@section('title', 'Rutas')

@section('content')


<div class="continer p-2 mb-2">
  <div class="w-100 h2 mx-auto mb-3 text-secondary text-center border-bottom border-secondary">
      Rutas
  </div>

  <div class="row">

      <div class="col-4 d-flex">
        <div class="card h-100">
          <img src="{{ URL::asset('storage/img/Ruta_Corta.png')}}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ruta con realidad aumentada</h5>
            <p class="card-text">
              En este recorrido disfrutarás de una experiencia cultural y tecnológica, donde además de apreciar los hermosos murales de San Carlos, también podrás experimentar la realidad aumentada desde tu celular.  
            </p>
          </div>
        </div>
      </div>

      <div class="col-4 d-flex">
        <div class="card h-100">
          <img src="{{ URL::asset('storage/img/Ruta_Media.png')}}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="...">
          <div class="card-body">
            <h5 class="card-title">Ruta memoria sueños y esperanza</h5>
            <p class="card-text">
              En este recorrido podrás ver todos los murales de San Carlos y conocer las historias que hay detrás de cada pincelada.
            </p>
          </div>
        </div>
      </div>

      <div class="col-4 d-flex">
          <div class="card h-100">
            <img src="{{ URL::asset('storage/img/Ruta_Larga.png')}}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="...">
            <div class="card-body">
              <h5 class="card-title">Ruta cultural de muralismo</h5>
              <p class="card-text">
                En este recorrido podrás conocer la historia de San Carlos y admirar una región que a pesar de las adversidades ha salido adelante…
                </p>
            </div>
          </div>
        </div>
    </div>

  </div>
</div>

<!-- Apartado para agendar una ruta -->
<div class="container">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6">
      <div class="card bg-light">
        <div class="card-body">
          <h4 class="card-title text-center mb-4">Agendar una ruta</h4>
          <p class="card-text text-center">¡Contáctanos para programar tu próxima aventura!</p>
          <div class="text-center">
            <a href="https://api.whatsapp.com/send?phone=NUMERO_DE_WHATSAPP" class="btn btn-success"><i class="fab fa-whatsapp"></i> Contactar por WhatsApp</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@include('layouts.footer')

@endsection
