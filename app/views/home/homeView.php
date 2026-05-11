<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/home.css">
    <title>Electro Smart</title>
</head>
<body>
    <header>
        <div class="header-logo">
            <img src="assets/img/electro-smart-logo.png" alt="logo">
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
            <form action="/proyecto-SO/public/index.php/auth/login" method="GET">
                <button type="submit">
                    <i class="fa-solid fa-user"></i>
                    Iniciar Sesión
                </button>
            </form>
            
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <span class="etiqueta">
                    <i class="fa-solid fa-bolt"></i>
                    Nueva colección 2026
                </span>
                <h1>Tecnología que <span class="red-text">se <br>siente.</span> </h1>
                <p>Descubre dispositivos pensados <br>para integrarse perfectamente en tu día a día.</p>
                <div>
                    <form action="/proyecto-SO/public/index.php/catalogo" method="GET">
                        <button class="explorar-catalogo-btn">
                            Explorar catálogo
                            <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </form>
                    
                </div>
                <div class="rating">
                    <div class="rating-estrellas">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    4.9 / 12k reseñas
                </div>
            </div>

            <div class="hero-img">
                <img src="assets/img/img-hero.jpg" alt="img hero">
            </div>
        </section>

        <section class="beneficios">
                <div class="beneficio ">
                    <i class="fa-solid fa-truck"></i>
                    <div class="beneficio-text">
                        <span>Envío gratis</span>
                        <span>Pedidos > S/80</span>
                    </div>
                </div>
                <div class="beneficio ">
                    <i class="fa-solid fa-shield"></i>
                    <div class="beneficio-text">
                        <span>Garantía 2 años</span>
                        <span>Cobertura total</span>
                    </div>
                </div>
                <div class="beneficio ">
                    <i class="fa-solid fa-bolt"></i>
                    <div class="beneficio-text">
                        <span>Pago en 1 clic</span>
                        <span>Checkout rápido</span>
                    </div>
                </div>
                <div class="beneficio ">
                    <i class="fa-solid fa-star"></i>
                    <div class="beneficio-text">
                        <span>Soporte 24/7</span>
                        <span>Sistema en la nube</span>
                    </div>
                </div>       
        </section>
    </main>

    <footer>
        <div class="footer-main">
            <div class="footer-brand">
                <span>Electro Smart</span>
                <p>Tecnología pensada para tu vida diaria.</p>
            </div>
            <div class="footer-col">
                <h4>Enlaces</h4>
                <a href="#">Catálogo</a>
                <a href="#">Destacados</a>
            </div>
            <div class="footer-col">
                <h4>Contacto</h4>
                <a href="#">soporte@electrosmart.com</a>
                <a href="#">+51 987 654 321</a>
            </div>
        </div>
        <div class="footer-bottom">
            <span>© 2026 Electro Smart. Todos los derechos reservados.</span>
        </div>
    </footer>
</body>
</html>