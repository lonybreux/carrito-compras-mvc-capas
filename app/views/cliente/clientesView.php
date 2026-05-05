<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyecto-SO/public/assets/style.css">

    <style>
        body {
            overflow-x: hidden;
        }
    </style>
    <title>Clientes</title>
</head>
<body>
    <h1>ElectroSmart</h1>
    <h2>Tabla de clientes</h2>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Contraseña</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($filas as $fila): ?>
                <tr>
                    <td><?php echo $fila['id_cliente'] ?></td>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td><?php echo $fila['apellido'] ?></td>
                    <td style="overflow:hidden; text-overflow:ellipsis; white-space:nowrap;"><?php echo $fila['email'] ?></td>
                    <td style="overflow:hidden; text-overflow:ellipsis; white-space:nowrap;"><?php echo $fila['contrasena'] ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

     <form action="/proyecto-SO/public/index.php" method="GET">
        <button type="submit" class="btn-regresar">Regresar</button>
    </form>
</body>
</html>