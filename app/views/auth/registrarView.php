<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>

<h1>Registro</h1>

<form action="/proyecto-SO/public/index.php/auth/registrar" method="POST">
    <input type="text" name="nombre" placeholder="ingresa tu nombre" required>
    <input type="text" name="apellido" placeholder="ingresa tu apellido" required>
    <input type="email" name="email" placeholder="ingrese su email" required>
    <input type="password" name="contrasena" placeholder="Ingrese su contraseña" required>
    <button type="submit">Enviar</button>
</form>
    
</body>
</html>