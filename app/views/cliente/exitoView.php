<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/exito.css">
    <title>Exito</title>
</head>
<body>
   <header>
        <div class="header-logo">
            <img src="../../assets/img/electro-smart-logo.png" alt="logo">
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
            <a class="cerrar-sesion-btn" href="/proyecto-SO/public/index.php"><i class="fa-solid fa-arrow-left"></i>Cerrar Sesión</a>
        </div>
    </header>

    <div class="exito-container">
        <div class="exito-card">
            <div class="icono-check">
                <i class="fa-solid fa-circle-check"></i>
            </div>

            <span class="etiqueta-exito">PEDIDO REALIZADO CON ÉXITO</span>
            <h1>¡Gracias por tu compra!</h1>
            <p>Hemos recibido tu pedido correctamente.</p>

            <div class="info-exito">
                <span class="info"><i class="fa-solid fa-receipt"></i> Nº pedido <?= $id_pedido['id_pedido'] ?></span>
                <span class="info"><i class="fa-regular fa-calendar"></i> <?=  date('d \d\e F, Y') ?></span>
            </div>

            <div class="exito-botones">
                <a href="/proyecto-SO/public/index.php/profile" class="btn-secundario">
                    <i class="fa-solid fa-bag-shopping"> </i>
                    Seguir comprando
                </a>
            </div>
        </div>
    </div>
    
</body>
</html>