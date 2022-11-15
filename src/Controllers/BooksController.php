<?php

namespace App\Controllers;

use App\Models\BooksModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
use Slim\Views\PhpRenderer;

class BooksController
{
    private BooksModel $booksModel;
    private PhpRenderer $renderer;

    public function __construct(PhpRenderer $renderer, BooksModel $booksModel)
    {
        $this->booksModel = $booksModel;
        $this->renderer =$renderer;
    }

    public function __invoke(Request $request, Response $response, array $args): Response
    {
        $data = $this->booksModel->getBooks();
        $response = $this->renderer->render($response, 'books.php', ['books' => $data]);
        return $response;
    }
}