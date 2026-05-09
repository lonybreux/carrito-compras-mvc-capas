<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script defer src="../assets/scripts/catalogo.js"></script>
    <link rel="stylesheet" href="../assets/css/catalogo.css">
    
    <title>Catálogo</title>
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
                <li><a href="/proyecto-SO/public/index.php/destacados">Destacados</a></li>
            </ul>
        </nav>
        <div>
            <form action="/proyecto-SO/public/index.php/auth/login" method="GET">
                <button type="submit">
                    <i class="fa-solid fa-user"></i>
                    Iniciar Sesión
                </button>
            </form>
            
        </div>
    </header>

    <section class="catalogo-hero">
        <div class="ruta">
            <a href="/proyecto-SO/public/index.php">Inicio</a> <span> / Catálogo</span>
        </div>
        <h1>Catálogo</h1>
        <p>Encuentra los productos que buscas, descubre nuestras marcas y <br>consulta su disponibilidad.</p>
        <div class="tabs">
            <button type="button" class="tab tab-activo">
                <i class="fa-solid fa-box-open"></i>
                Productos
            </button>
            <button type="button" class="tab">
                <i class="fa-solid fa-tag"></i>
                Marcas
            </button>
        </div>
    </section>
    
    <section class="productos-section">
        <div id="vista-productos" class="seccion">
            <div class="casillas">
                <?php foreach($productos as $producto): ?>
                    <div class="producto-card">
                        <div class="producto-img">
                            <div class="producto-etiquetas">
                                <span class="categoria"><?php echo $producto['categoria'] ?></span>
                                <span class="estado" style="background-color: <?= $producto['estado'] === 'disponible' ? '#16a34a' : '#6d7279' ?>"> <?php echo $producto['estado'] ?></span>
                            </div>
                            <img src="../assets/img/<?php echo htmlspecialchars($producto['imagen']) ?>" alt="producto">
                        </div>
                        <div class="producto-info">
                            <div class="producto-rating">
                                <span><?php echo $producto['marca'] ?></span>
                                <span><i class="fa-solid fa-star"></i> 4.9</span>
                            </div>
                            <div class="producto-detalle">
                                <span><?php echo $producto['nombre'] ?></span>
                                <span><?php echo $producto['precio'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?> 
            </div>
        </div>
        <div id="vista-marcas" class="seccion" hidden>
            <div class="casillas"> 
                <?php foreach($marcas as $marca): ?>
                    <div class="marca-card">
                        <div class="marca-img">
                            <img src="../assets/img/<?php echo htmlspecialchars($marca['imagen']) ?>" alt="marca">
                        </div>
                        <div class="marca-info">
                            <div class="marca-detalle">
                                <h2><?php echo $marca['nombre'] ?></h2>
                            </div>
                        </div>
                    </div>

                <?php endforeach ?>
            </div>
        </div>
    </section>
</body>
</html>