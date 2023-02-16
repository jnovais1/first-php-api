<?php
    require_once "../vendor/autoload.php";

    $route = new \app\Route;

    echo "<h1>Servidor rodando na porta 80</h1>";
    print_r($route->getUrl());
    print_r($route->getRouters());

?>