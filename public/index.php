<?php
require_once "../app/config/config.php";
require_once "../app/core/Controller.php";

$url = $_GET['url'] ?? 'post/index';
$url = explode('/', rtrim($url, '/'));

$controllerName = ucfirst($url[0]) . 'Controller';
$method = $url[1] ?? 'index';
$param = $url[2] ?? null;

require_once "../app/controllers/$controllerName.php";

$controller = new $controllerName();
$param ? $controller->$method($param) : $controller->$method();
