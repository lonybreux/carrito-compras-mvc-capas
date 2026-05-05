<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyecto-SO/public/assets/style.css">
    <title>Productos</title>
</head>
<body>
    <h1>ElectroSmart</h1>

    <h2>Tabla de productos</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Marca</th>
                <th>Categoria</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($filas as $fila): ?>
                <tr>
                    <td><?php echo $fila['id_producto'] ?></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['precio'] ?></td>
                    <td><?php echo $fila['estado'] ?></td>
                    <td><?php echo $fila['marca'] ?></td>
                    <td><?php echo $fila['categoria'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <form action="/proyecto-SO/public/index.php" method="GET">
        <button type="submit" class="btn-regresar">Regresar</button>
    </form>
</body>
</html>