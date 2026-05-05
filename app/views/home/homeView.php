<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        button {
            margin-top:20px;
        }
    </style>


    <title>Home</title>
</head>
<body>
    <h1>ElectroSmart</h1>

    <form action="/proyecto-SO/public/index.php/productos" method="GET">
        <button type="submit">Ver Productos</button>
    </form>
    <form action="/proyecto-SO/public/index.php/clientes" method="GET">
        <button type="submit">Ver Clientes</button>
    </form>
    <form action="/proyecto-SO/public/index.php/inventario" method="GET">
        <button type="submit">Ver Inventario</button>
    </form>
    <form action="/proyecto-SO/public/index.php/auth" method="GET">
        <button type="submit">Ingresar</button>
    </form>
    
</body>
</html>