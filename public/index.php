<?php
session_start();

require_once __DIR__ . '/../app/routes/webRouter.php';
require_once __DIR__ . '/../config/db.php';

//require_once __DIR__ . '/../app/controllers/authController.php';
//require_once __DIR__ . '/../app/controllers/clienteController.php';
//require_once __DIR__ . '/../app/controllers/carritoController.php';


$conn = ConexionBaseDatos::getInstance();
$router = new WebRouter();

$urlBase = "/proyecto-SO/public/index.php";
$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$url = str_replace($urlBase,'',$url);

if($url === '') {
    $url = '/';
}

$router->route($url,$conn);

/*switch($url) {
    case '/':
        $homeController = new HomeController($conn);
        $homeController->index();
        break;
    case '/auth':
        $authController = new AuthController($conn);
        $authController->index();
        break;
    case '/auth/registrar':
        $authController = new AuthController($conn);
        $authController->registrar();
        break;
    case '/auth/iniciar-sesion':
        $authController = new AuthController($conn);
        $authController->iniciarSesion();
        break;
    case '/perfil':
        $clienteController = new ClienteController($conn);
        $clienteController->verPerfil();
        break;
    case '/perfil/carrito':
        $carritoController = new CarritoController($conn);
        $carritoController->verCarrito();
        break;
    case '/perfil/agregar':
        $carritoController = new CarritoController($conn);
        $carritoController->agregarProducto();
        break;
    case '/perfil/eliminar':
        $carritoController = new CarritoController($conn);
        $carritoController->eliminarProducto();
        break;
    default:
        http_response_code(404);
        echo 'Página no encontrada';
        break;
}*/
?>