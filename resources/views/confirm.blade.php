<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <title>Confirmar pedido</title>
</head>
<body>
    <h1>Confirmación de pedido</h1>

    <p>
        **Resumen del pedido:**
        <br>
        Tamaño: {{ $tamaño }}
        <br>
        Sabor 1: {{ $sabor1 }}
        <br>
        Sabor 2: {{ $sabor2 }}
    </p>

    <p>
        **Estado del pedido:** {{ $estado }}
    </p>

</body>
</html>
