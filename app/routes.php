<?php
declare(strict_types=1);

use App\Controllers\BooksController;
use App\Controllers\CoursesAPIController;
use App\Controllers\DvdController;
use Slim\App;
use Slim\Views\PhpRenderer;

return function (App $app) {
    $container = $app->getContainer();

    //demo code - two ways of linking urls to functionality, either via anon function or linking to a controller

    $app->get('/', function ($request, $response, $args) use ($container) {
        $renderer = $container->get(PhpRenderer::class);
        return $renderer->render($response, "index.php", $args);
    });

    $app->get('/courses', CoursesAPIController::class);

//    $app->get('/books', function (ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
//    {
//        $response->getBody()->write('Hello from an <strong>anonymous function</strong>');
//        return $response;
//    });

    $app->get('/books', BooksController::class);

    $app->get('/dvds/{dvd}', DvdController::class);

    $app->get('/dvds', DvdController::class);
};
