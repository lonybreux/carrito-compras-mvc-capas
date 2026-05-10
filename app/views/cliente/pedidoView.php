<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/pedido.css">
    <title>Pedido</title>
</head>
<body>
    <header>
        <div class="header-logo">
            <img src="../assets/img/electro-smart-logo.png" alt="logo">
            <a href="#">
                <span>Electro Smart</span>
            </a>
        </div>
        
        <nav>
            <ul>
                <li><a href="/proyecto-SO/public/index.php/catalogo">Catálogo</a></li>
            </ul>
        </nav>
        <div> 
            <a class="cerrar-sesion-btn" href="/proyecto-SO/public/index.php"><i class="fa-solid fa-arrow-left"></i>Cerrar sesión</a>
        </div>
    </header>

    <div class="profile-container">
        <aside class="sidebar">
            <h2>Bienvenido</h2>
            <div class="perfil-card">
                <div class="avatar">
                    <?php echo strtoupper(substr($_SESSION['nombre'],0,1)) . strtoupper(substr($_SESSION['apellido'],0,1))?>
                </div>
                <h2><?php echo $_SESSION['nombre'] ?>  <?php echo $_SESSION['apellido'] ?></h2>
                <p>cliente desde 2026</p>
            </div>
            <nav class="sidebar-nav">
                <button class="nav-btn"><i class="fa-solid fa-cart-shopping"></i> Carrito</button>
                <button class="nav-btn activo-btn"><i class="fa-solid fa-box"></i> Pedidos</button>
            </nav>
        </aside>

        
        <div class="contenido">
            <div class="pedido-form">
                <span class="etiqueta">Carrito · Finalizar compra</span>
                <h1>Confirma tu pedido</h1>
                <p>Completa tus datos para enviarte información.</p>

            <form action="/proyecto-SO/public/index.php/pedido/confirmar">
                <div class="form-card">
                    <h3>Dirección de envío</h3>
                    <div class="form-group">
                        <label>Dirección</label>
                        <input type="text" name="direccion" placeholder="Calle, número, piso">
                    </div>   
                </div>

                <div class="form-card">
                    <h3><i class="fa-solid fa-credit-card"></i> Método de pago</h3>

                    <div class="metodo-tabs">
                        <button type="button" class="metodo-tab metodo-activo">Tarjeta de crédito</button>
                        <button type="button" class="metodo-tab">PayPal</button>
                        <button type="button" class="metodo-tab">Transferencia</button>
                    </div>

                    <div class="form-group">
                        <label>Número de tarjeta</label>
                        <input type="text" name="numero_tarjeta" placeholder="1234 5678 9012 3456">
                    </div>

                    <div class="form-fila">
                        <div class="form-group">
                            <label>Titular</label>
                            <input type="text" name="titular" placeholder="Como aparece en la tarjeta">
                        </div>
                        <div class="form-group">
                            <label>Caducidad</label>
                            <input type="text" name="caducidad" placeholder="MM / AA">
                        </div>
                    </div>

                    <div class="form-fila">
                        <div class="form-group">
                            <label>CVV</label>
                            <input type="text" name="cvv" placeholder="123">
                        </div>
                        <div class="form-group">
                            <label>Código postal de facturación</label>
                            <input type="text" name="codigo_facturacion" placeholder="28001">
                        </div>
                    </div>
                </div>

                <button type="submit">Confirmar pedido</button>
            </form>
                
            </div>
        </div>

    </div>
    
</body>
</html>