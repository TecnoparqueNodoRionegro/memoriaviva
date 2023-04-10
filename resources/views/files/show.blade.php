<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Archivo</title>
</head>
<body>
    @switch($file->file_type_id)
        @case(1)
            <img src="{{ $file->route }}">
            @break
        @case(2)
        <iframe width="560" height="315" src="{{ $file->route }}" frameborder="0" allowfullscreen></iframe>
            @break
        @case(3)
            <audio src="{{ $file->route }}"></audio>
            @break
        @default
            
    @endswitch
</body>
</html>