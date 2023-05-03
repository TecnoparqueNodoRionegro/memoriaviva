<footer class=" w-100 fixed-bottom" style="background-image: url('storage/img/fondo.png');">
    <div class="container text-light d-flex justify-content-center">
        <div class="row">

            <div class="col-md-6 justify-content w-50 p-3">
                <h4 class="footer-title"><i class=" ">Nosotros</i></h4>
                <ul class="list-unstyled ml-1">
                <li><i class="bi bi-envelope-fill me-2"><i class="fa-solid fa-envelope" style="margin-right: 10px"></i> Correo electrónico: ejemplo@ejemplo.com</i> </li>
                <li><i class="bi bi-telephone-fill me-2"><i class="fa-solid fa-mobile-screen" style="margin-right: 10px"></i> Teléfono: 123-456-7890</i></li>
                <li><i class="bi bi-geo-alt-fill me-2"><i class="fa-solid fa-location-dot" style="margin-right: 10px;"></i> Dirección: 123 Calle Ejemplo, Ciudad Ejemplo, Estado Ejemplo.</i> </li>
                </ul>
            </div>

            <div class="col-md-6 justify-content-center w-50 p-3 text-center">
                <h4><i class="footer-title text-center">Formulario de contacto</i></h4>

                <form action="{{route('contactanos.store')}}" method="post" id="form-contact">
                    @csrf
                    <div class="mt-2">
                        {{-- <label for="nombre" class=""><i class="bi bi-envelope-fill me-2"></i></label> --}}
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" placeholder="Nombre:" >
                            @error('nombre')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                    </div>

                    <div class="mt-2">
                        {{-- <label for="correo" class=""><i class="bi bi-envelope-fill me-2"></i></label> --}}
                        <input type="email" class="form-control" id="correo" name="correo" value="{{old('correo')}}" placeholder="Email:">
                            @error('correo')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                    </div>

                    <div class="mt-2">
                        {{-- <label for="mensaje" class=""><i class="bi bi-envelope-fill me-2"></i></label> --}}
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="2" value="{{old('mensaje')}}" placeholder="Mensaje:"></textarea>
                            @error('mensaje')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                    </div>

                    <div class="d-flex justify-content-center mt-2">
                        <button type="submit" class="btn btn-primary mt-1" >Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div style="font-family: 'Roboto', sans-serif; background-color: #000000; color: #fff; text-align: center;">
        <hr>
        © 2023 Memoria todo color. Todos los derechos reservados.
    </div>
</footer>

