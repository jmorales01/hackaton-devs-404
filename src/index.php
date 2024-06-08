<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Psr\Container\ContainerInterface;


require __DIR__ . '/core/slim/vendor/autoload.php';
require __DIR__ . '/core/Mysql.php';

// Import controllers
require __DIR__ . '/controllers/HomeController.php';
require __DIR__ . '/controllers/ChatController.php';
require __DIR__ . '/controllers/TareaController.php';


$app = AppFactory::create();
$mysql = new \core\Mysql();


$app->get('/', function (Request $request, Response $response, $args) use ($mysql) {
    $controller = new \controllers\HomeController($mysql);
    $controller->index($request, $args);
    return $response;
});

$app->get('/chat', function (Request $request, Response $response, $args) use ($mysql) {
    $controller = new \controllers\ChatController($mysql);
    $controller->index($request, $args);
    return $response;
});

$app->get('/tarea', function (Request $request, Response $response, $args) use ($mysql) {
    $controller = new \controllers\TareaController($mysql);
    $controller->index($request, $args);
    return $response;
});

$app->run();
