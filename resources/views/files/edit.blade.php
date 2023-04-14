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
    <form action="{{ route('files.update', $file) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        
        <div class="card w-50 position-absolute top-50 start-50 translate-middle">
            <h1 class="text-center mt-1">ACTUALIZAR ARCHIVO</h1>
            <div class="card-body">
                <div class="text-center"> 
                    @switch($file->file_type_id)
                        @case(1)
                        <div>
                            <img class="w-50" src="{{ URL::asset($file->route) }}">
                        </div>
                            @break
                        @case(2)
                            <a href="{{ $file->route }}" target="_blank">Video</a>
                            @break
                        @case(3)
                                <audio src="{{ $file->route }}"></audio>
                            @break
                        @default
                    @endswitch
                </div>

                <div>
                    <label class="form-label mt-2">Categoría:</label>
                    <select class="form-select" name="categoryFile">
                        @foreach ($categoryFiles as $categoryFile)
                            @if ($categoryFile->id == $file->categories->id)
                                <option value="{{$categoryFile->id}}" selected>{{ $file->categories->description }}</option>
                            @else
                                <option value="{{$categoryFile->id}}">{{$categoryFile->description}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div>
                    <label class="form-label mt-2">Estado:</label>
                    <select class="form-select" name="state">
                        @foreach ($states as $state)
                            @if ($state->id == $file->states->id)
                                <option value="{{$state->id}}" selected>{{ $file->states->description }}</option>
                            @else
                                <option value="{{$state->id}}">{{$state->description}}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                
                <div class="text-center mt-3">
                    <button class="btn btn-dark w-50" type="submit">Enviar</button>
                </div>

                <a href="{{ route('files.index') }}">Volver</a>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.min.js" integrity="sha384-heAjqF+bCxXpCWLa6Zhcp4fu20XoNIA98ecBC1YkdXhszjoejr5y9Q77hIrv8R9i" crossorigin="anonymous"></script>
</body>
</html>