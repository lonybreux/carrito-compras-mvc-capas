<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyecto-SO/public/assets/style.css">
    <title>Inventario</title>
</head>
<body>
    <h1>ElectroSmart</h1>
    <h2>Tabla de Inventario</h2>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Stock Actual</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($filas as $fila): ?>
                <tr>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['stock_actual'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <form action="/proyecto-SO/public/index.php" method="GET">
        <button type="submit" class="btn-regresar">Regresar</button>
    </form>
    
</body>
</html>