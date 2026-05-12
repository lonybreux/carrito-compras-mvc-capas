<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/perfil.css">
    <script defer src="../assets/scripts/profile.js"></script>
    <title>Perfil</title>
</head>
<body>
    <header>
        <div class="header-logo">
            <img src="../assets/img/electro-smart-logo.png" alt="logo">
            <a href="#">
                <span>Electro Smart</span>
            </a>
        </div>
        
        <div> 
            <a class="cerrar-sesion-btn" href="/proyecto-SO/public/index.php"><i class="fa-solid fa-arrow-left"></i>Cerrar sesión</a>
        </div>
    </header>
    
    <?php if($_SESSION['flag'] === TRUE): ?>
        <h1>No se pudo ingresar</h1>
    <?php else: ?>
        
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
                    <button class="nav-btn activo-btn"><i class="fa-solid fa-cart-shopping"></i> Carrito</button>
                    <button class="nav-btn"><i class="fa-solid fa-box"></i> Pedidos</button>
                </nav>
            </aside>

            <div class="contenido">
                <section class="seccion-carrito">
                    <div class="carrito-col">
                        <h2>Tu carrito</h2>
                        <p>aquí encontrarás los artículos que quieres comprar</p>
                        
                        <div class="lista-carrito">
                            <?php foreach($productos as $producto): ?>
                                <div class="producto-carrito">
                                    <div class="producto-imagen">
                                        <img src="../assets/img/<?= ($producto['imagen']) ?>" alt="producto">
                                    </div>
                                    <div class="producto-info">
                                        <span class="producto-nombre"><?= $producto['nombre']?></span>
                                        <span class="producto-precio">S/ <?= $producto['precio']?></span>
                                    </div>
                                    <div class="producto-cantidad">
                                        <span class="cantidad-producto"><?= $producto['cantidad'] ?></span>
                                    </div>
                                    <form action="/proyecto-SO/public/index.php/profile/actualizar" method="POST">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="id_producto" value="<?= $producto['id_producto'] ?>">

                                        <button type="submit" class="btn-eliminar">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                    
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>

                    <div class="resumen-col">
                        <h3>Resumen de pedido</h3>
                        <div class="resumen-detalle">
                            <span>subtotal</span>
                            <span><?= $total ?></span>
                        </div>
                        <div class="resumen-detalle">
                            <span>Envio</span>
                            <span>Gratis</span>
                        </div>
                        <div class="resumen-total">
                            <span>Total</span>
                            <span><?= $total ?></span>
                        </div>
                        <a href="/proyecto-SO/public/index.php/pedido" class="btn-finalizar">Finalizar compra</a>
                    </div>

                </section>

                <section class="seccion-actualizar">
                    <div class="productos-disponibles">
                        <h2>Productos que puede agregar</h2>
                        <?php foreach($todosProductos as $producto): ?>
                            <?php if($producto['estado'] === 'disponible'): ?>
                                <div class="producto-disponible">
                                    <div class="producto-imagen">
                                        <img src="../assets/img/<?= ($producto['imagen']) ?>" alt="producto">
                                    </div>
                                    <div class="producto-info">
                                        <span class="id-etiqueta"><?= $producto['id_producto'] ?></span>
                                        <span class="producto-nombre"><?= $producto['nombre']?></span>
                                        <span class="producto-precio">S/ <?= $producto['precio']?></span>
                                        <span class="producto-stock"> Quedan: <?php echo $producto['stock_actual'] ?></span>
                                    </div>
                                </div>
                            <?php endif ?>
                        <?php endforeach ?>
                    </div>
                    <form action="/proyecto-SO/public/index.php/profile/actualizar" method="POST">
                        <h3>Agregar producto</h3>
                        <label>ID del producto</label>
                        <input type="number" name="id" min="1" max="13" required>
                        <label>Cantidad</label>
                        <input type="number" name="cantidad" min="1" required>
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </section>

            </div>
        </div>

    <?php endif ?>
</body>
</html>