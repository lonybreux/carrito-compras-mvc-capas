<?php
require_once __DIR__ . '/../controllers/homeController.php';
require_once __DIR__ . '/../controllers/authController.php';

class WebRouter {

    private $routes = [
        '/' => [HomeController::class, 'index'],
        '/auth/login' => [AuthController::class,'index']
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