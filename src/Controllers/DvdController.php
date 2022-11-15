<?php

namespace App\Controllers;

use App\Models\DvdsModel;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Slim\Views\PhpRenderer;

class DvdController
{
    private DvdsModel $dvdsModel;
    private PhpRenderer $renderer;

    public function __construct(PhpRenderer $renderer, DvdsModel $dvdModel)
    {
        $this->dvdsModel = $dvdModel;
        $this->renderer = $renderer;
    }

    function __invoke(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {
        $data = $this->dvdsModel->getDvds();
        return $this->renderer->render($response, 'dvds.php', ['dvds' => $data]);
    }
}