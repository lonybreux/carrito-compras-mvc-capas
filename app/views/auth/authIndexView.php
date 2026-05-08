<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/login.css">
    <title>Auth</title>
</head>
<body>

    <div class="login-container">
        <div class="login-card">
            <div class="login-header">
                <h2>Bienvenido de vuelta</h2>
                <p>Inicia sesión para continuar en Nova</p>
            </div>
            <form action="/proyecto-SO/public/index.php/profile">
                <label>Email</label>
                <input type="email" placeholder="tu@email.com" required>
                <label>Contraseña</label>
                <input type="password" placeholder="••••••••" required>
                <button type="submit">Iniciar sesión</button>
            </form>
            <div class="login-footer">
                <p>¿No tienes cuenta?</p>
                <a href="/proyecto-SO/public/index.php/auth/register">Regístrate</a>
            </div>
        </div>
    </div>

    
</body>
</html>