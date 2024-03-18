<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pepes Pizza</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
<img src="{{ asset('/public/img/pizzapepe.png') }}" alt="Logo de Pizza" class="logo">
    <h1>Pepes Pizza</h1>
    <h2>La Pizza más Mela</h2>
    <a href="{{ route('ordenar-pizza') }}" class="btn">Ordenar una pizza</a>
</body>
</html>
