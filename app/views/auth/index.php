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

    <title>Auth</title>
</head>
<body>

    <form action="/proyecto-SO/public/index.php/auth/registrar" method="GET">
        <button type="submit">Registrarse</button>
    </form>
    <form action="/proyecto-SO/public/index.php/auth/iniciar-sesion" method="GET">
        <button type="submit">Iniciar Sesión</button>
    </form>

    
</body>
</html>