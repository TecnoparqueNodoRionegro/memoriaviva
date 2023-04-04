<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Publica un producto</title>
</head>
<body class="bg-dark">
    <div class="text-center mt-3">
        <img class="img-fluid" src="{{URL::asset('storage/img/logo.png')}}" style="width: 280px;">
    </div>

    <div class="card mt-5 w-50 position-absolute top-50 start-50 translate-middle">
        <div class="card-body">
            <h1 class="text-center">PUBLICAR PRODUCTO</h1>
            <form action="{{route('products.store')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div>
                    <label class="form-label">Nombre:</label>
                    <input class="form-control" type="text" name="name" value="{{old('name')}}">
                    @error('name')
                        <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label class="form-label mt-2">Descripción:</label>
                    <textarea class="form-control" rows="5" name="description">{{old('description')}}</textarea>
                    @error('description')
                        <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
                
                <div>
                    <label class="form-label mt-2">Precio:</label>
                    <input class="form-control" type="number" name="price" value="{{old('price')}}">
                    @error('price')
                        <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>

                <div>
                    <label class="form-label mt-2">Imagen:</label>
                    <input class="form-control" type="file" name="cover_page_url" value="{{old('cover_page_url')}}" accept="image/*">
                    @error('cover_page_url')
                        <small class="text-danger">*{{ $message }}</small>
                    @enderror
                </div>
                
                <div class="text-center mt-3">
                    <button class="btn btn-dark w-50" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>