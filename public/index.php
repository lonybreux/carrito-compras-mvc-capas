<?php
session_start();

require_once __DIR__ . '/../app/routes/webRouter.php';
require_once __DIR__ . '/../config/db.php';

$conn = ConexionBaseDatos::getInstance();
$router = new WebRouter();

$urlBase = "/proyecto-SO/public/index.php";
$url = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
$url = str_replace($urlBase,'',$url);

if($url === '') {
    $url = '/';
}

$router->route($url,$conn);


?>