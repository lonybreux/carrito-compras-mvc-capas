<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .btn-cerrar-sesion {
            margin-top:20px;
        }
    </style>
    
    <title>Perfil</title>
</head>
<body>
    <h1>Bienvenido <?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']?></h1>
    <form action="/proyecto-SO/public/index.php/perfil/carrito" method="GET">
        <button type="submit">Ver Carrito</button>
    </form>
</body>
</html>