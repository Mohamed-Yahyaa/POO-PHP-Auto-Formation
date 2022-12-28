<?php

require __DIR__ . '/core/bootstrap.php';

// var_dump($_GET);
// die();
$exploded = explode('/', $_GET['q']);

$controller = '\\App\\Controllers\\' . ucfirst($exploded[0]) . 'Controller';
$method = isset($exploded[1]) ? $exploded[1] : 'index';

$controllerInstance = new $controller();
$controllerInstance->$method();

