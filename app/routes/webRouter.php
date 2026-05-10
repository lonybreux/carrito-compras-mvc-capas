<?php
require_once __DIR__ . '/../controllers/homeController.php';
require_once __DIR__ . '/../controllers/authController.php';
require_once __DIR__ . '/../controllers/catalogoController.php';
require_once __DIR__ . '/../controllers/clienteController.php';
require_once __DIR__ . '/../controllers/pedidoController.php';

class WebRouter {

    private $routes = [
        '/' => [HomeController::class, 'index'],
        '/auth' => [AuthController::class,'iniciarSesion'],
        '/auth/login' => [AuthController::class,'index'],
        '/auth/register' => [AuthController::class,'registrar'],
        '/profile' => [ClienteController::class, 'verPerfil'],
        '/profile/actualizar' =>[ClienteController::class, 'actualizar'],
        '/catalogo' => [CatalogoController::class,'index'],
        '/pedido' => [ClienteController::class, 'pedido'],
        '/pedido/confirmar' => [PedidoController::class,'registrarPedido'],
        '/pedido/exito' => [PedidoController::class,'']
    ];

    public function route($url,$conn) {

        if(!isset($this->routes[$url])) {
            http_response_code(404);
            echo "Página no encontrada";
            return;
        }

        [$genericController, $method] = $this->routes[$url];

        $controller = new $genericController($conn);
        $controller->$method();

    }

    
}


?>