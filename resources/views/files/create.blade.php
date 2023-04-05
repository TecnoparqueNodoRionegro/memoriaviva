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

    <form action="{{route('files.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="card mt-5 w-50 position-absolute top-50 start-50 translate-middle">
            <h1 class="text-center mt-1">SUBIR ARCHIVO</h1>
            <div class="card-body">

                    <div>
                        <label class="form-label mt-2">Archivo:</label>
                        <input class="form-control" type="file" name="routeFile" accept="image/*, video/*, audio/*">
                    </div>

                    <div>
                        <label class="form-label mt-2">URL:</label>
                        <input class="form-control" type="text" name="routeUrl">
                    </div>

                    <div>
                        <label class="form-label mt-2">Categoría:</label>
                        <select class="form-select" name="categoryFile">
                            <option disabled selected>Selecciona...</option>
                            @foreach ($categoryFiles as $categoryFile)
                                <option value="{{$loop->iteration}}">{{$categoryFile->description}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="form-label mt-2">Tipo de archivo:</label>
                        <select class="form-select" name="fileType">
                            <option disabled selected>Selecciona...</option>
                            @foreach ($fileTypes as $fileType)
                                <option value="{{$loop->iteration}}">{{$fileType->description}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label class="form-label mt-2">Estado:</label>
                        <select class="form-select" name="state">
                            <option disabled selected>Selecciona...</option>
                            @foreach ($states as $state)
                                <option value="{{$loop->iteration}}">{{$state->description}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="text-center mt-3">
                        <button class="btn btn-dark w-50" type="submit">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>