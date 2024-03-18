<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <title>Ordenar una pizza</title>
</head>
<body>
    <h1>Ordenar una pizza</h1>

    <form action="{{ route('ordenar-pizza.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="tamaño">Tamaño:</label>
            <select class="form-control" id="tamaño" name="tamaño">
                <option value="pequeña">Pequeña</option>
                <option value="mediana">Mediana</option>
                <option value="grande">Grande</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sabor1">Sabor 1:</label>
            <select class="form-control" id="sabor1" name="sabor1">
                <option value="peperoni">Pepperoni</option>
                <option value="hawaiana">Hawaiana</option>
                <option value="mexicana">Mexicana</option>
                <option value="vegetariana">Vegetariana</option>
            </select>
        </div>

        <div class="form-group">
            <label for="sabor2">Sabor 2:</label>
            <select class="form-control" id="sabor2" name="sabor2">
                <option value="peperoni">Pepperoni</option>
                <option value="hawaiana">Hawaiana</option>
                <option value="mexicana">Mexicana</option>
                <option value="vegetariana">Vegetariana</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Confirmar pedido</button>
    </form>
</body>
</html>
