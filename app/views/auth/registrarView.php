<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../../assets/css/register.css">
    <title>Registrar</title>
</head>
<body>

    <div class="register-container">
        <div class="register-info">
            <span class="etiqueta">
                <i class="fa-solid fa-user-plus"></i>
                Únete a Electro Smart
            </span>
            <h1>Crea tu cuenta y empieza a <span class="especial-text">comprar</span></h1>
            <ul>
                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    Acceso anticipado a productos exclusivos
                </li>
                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    Seguimiento en tiempo real de tus pedidos
                </li>
                <li>
                    <i class="fa-solid fa-circle-check"></i>
                    Soporte prioritario 24/7
                </li>
            </ul>
        </div>
        <div class="register-card">
            <div class="register-header">
                <h2>Crea tu cuenta</h2>
                <p>Solo te tomará unos segundos</p>
            </div>
            <form action="/proyecto-SO/public/index.php/auth/login" method="POST">
                <label>Nombre</label>
                <input type="text" name="nombre" placeholder="Tu nombre" required>
                <label>Apellido</label>
                <input type="text" name="apellido "placeholder="Tu apellido" required>
                <label>Email</label>
                <input type="email" name="email" placeholder="tu@email.com" required>
                <label>Contraseña</label>
                <input type="password" name="contrasena" placeholder="Mínimo 5 caracteres" required>
                <button type="submit">Crear cuenta</button>
            </form>
        </div>
    </div>

    
</body>
</html>