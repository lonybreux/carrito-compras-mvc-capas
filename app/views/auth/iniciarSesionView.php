<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
</head>
<body>
    <?php if($flag === FALSE): ?>
        <h1>Iniciar Sesión</h1>
            <form action="/proyecto-SO/public/index.php/auth/iniciar-sesion" method="POST">
                <input type="email" name="email" placeholder="ingrese su email" required>
                <input type="password" name="contrasena" placeholder="Ingrese su contraseña" required>
                <button type="submit">Enviar</button>
            </form>
    <?php endif ?>
    
    <?php if($flag === TRUE): ?>

        <h1>No pudo ingresar</h1>
        <form action="/proyecto-SO/public/index.php" method="GET">
            <button type="submit">Regresar</button>
        </form>
    
    <?php endif ?>
    
</body>
</html>