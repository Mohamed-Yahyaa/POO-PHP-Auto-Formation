<?php

require __DIR__ . '/core/bootstrap.php';

$exploded = explode('/', $_GET['q']);

$controller = '\\app\\Controllers\\' . ucfirst($exploded[0]) . 'Controller';
$method = isset($exploded[1]) ? $exploded[1] : 'index';

$controllerInstance = new $controller();
$controllerInstance->$method();

