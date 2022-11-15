<?php

namespace App\Controllers;

use App\Models\DvdsModel;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;

class DvdsController
{
    private DvdsModel $dvdsModel;
    private PhpRenderer $renderer;

    public function __construct(PhpRenderer $renderer, DvdsModel $dvdsModel)
    {
        $this->dvdsModel = $dvdsModel;
        $this->renderer =$renderer;
    }

    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $data = $this->dvdsModel->getDvds();
        $response = $this->renderer->render($response, 'dvds.php', ['dvds' => $data]);
        return $response;
    }
}