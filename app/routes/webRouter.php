<?php
require_once __DIR__ . '/../controllers/homeController.php';
require_once __DIR__ . '/../controllers/authController.php';
require_once __DIR__ . '/../controllers/catalogoController.php';
require_once __DIR__ . '/../controllers/clienteController.php';

class WebRouter {

    private $routes = [
        '/' => [HomeController::class, 'index'],
        '/auth' => [AuthController::class,'iniciarSesion'],
        '/auth/login' => [AuthController::class,'index'],
        '/auth/register' => [AuthController::class,'registrar'],
        '/profile' => [ClienteController::class, 'verPerfil'],
        '/catalogo' => [CatalogoController::class,'index']
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