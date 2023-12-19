<?php

$router->get('/', function () use ($router) {
    return view('consultas');
});

require __DIR__.'/api.php';
