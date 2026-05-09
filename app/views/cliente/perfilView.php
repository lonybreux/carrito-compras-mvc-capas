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
    
    <?php if($_SESSION['flag'] === TRUE): ?>
        <h1>No se pudo ingresar</h1>
    <?php else: ?>
        <h1>Bienvenido <?php echo $_SESSION['nombre'] . ' ' . $_SESSION['apellido']?></h1>
    <?php endif ?>
</body>
</html>