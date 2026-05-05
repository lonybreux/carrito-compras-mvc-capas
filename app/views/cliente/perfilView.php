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

    <h2>Agregar Producto</h2>
    <form action="/proyecto-SO/public/index.php/perfil/agregar" method="POST">
        <input type="number" name="id_producto" placeholder="Ingrese ID producto" required>
        <input type="number" name="cantidad" placeholder="Ingrese cantidad" required>
        <button type="submit">Agregar</button>
    </form>

    <h2>Eliminar Producto</h2>
    <form action="/proyecto-SO/public/index.php/perfil/eliminar" method="POST">
        <input type="number" name="id_producto" placeholder="Ingrese ID producto" required>
        <button type="submit">eliminar</button>
    </form>

    <form action="proyecto-SO/public/index.php">
        <button type="submit" class="btn-cerrar-sesion">Cerrar Sesión</button>
    </form>

    <?php if(isset($_SESSION['agregar'])): ?>
        <?php if($_SESSION['agregar'] === TRUE): ?>
            <p>Producto agregado correctamente</p>
        <?php else: ?>
            <p>El producto no existe</p>
        <?php endif ?>
    <?php endif ?>
    <?php unset($_SESSION['agregar']); ?>


</body>
</html>