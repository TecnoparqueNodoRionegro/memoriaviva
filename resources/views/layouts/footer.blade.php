<footer class="">
    <div class="container text-light d-flex justify-content-center">
        <div class="row">
            <div class="col-md-6 ">
                <h4 class=""><i class="bi bi-envelope-fill me-2">Nosotros</i></h4>
                <ul class="list-unstyled">
                <li><i class="bi bi-envelope-fill me-2"><i class="fa-solid fa-envelope"></i> Correo electrónico: ejemplo@ejemplo.com</i> </li>
                <li><i class="bi bi-telephone-fill me-2"><i class="fa-solid fa-mobile-screen"></i> Teléfono: 123-456-7890</i></li>
                <li><i class="bi bi-geo-alt-fill me-2"><i class="fa-solid fa-location-dot"></i> Dirección: 123 Calle Ejemplo, Ciudad Ejemplo, Estado Ejemplo, Código Postal Ejemplo</i> </li>
                </ul>
            </div>
            <div class="col-md-6 justify-content-center">
                <h4><i class="bi bi-envelope-fill me-2">Formulario de contacto</i></h4>

                <form action="procesar.php" method="post">
                    <div class="mt-2">
                        <label for="nombre" class=""><i class="bi bi-envelope-fill me-2">Nombre:</i></label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>

                    <div class="mt-2">
                        <label for="email" class=""><i class="bi bi-envelope-fill me-2">Email:</i></label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>

                    <div class="mt-2">
                        <label for="mensaje" class=""><i class="bi bi-envelope-fill me-2">Mensaje:</i></label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="2" required></textarea>
                    </div>

                    <div class="d-flex justify-content-center mt-2 mb-2">
                        <button type="submit" class="btn btn-primary mt-1 ">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</footer>
