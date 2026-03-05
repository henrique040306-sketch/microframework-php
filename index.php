<?php

require_once __DIR__ . '/core/Router.php';

$router = new Router();

$router->add('/hello', 'routes/hello.php');
$router->add('/bye', 'routes/bye.php');

$router->run();
