<?php

namespace App\Models;

class BooksModel
{

    public function getBooks(): array
    {
        $data = [
            [
                'title' => 'Refactoring',
                'author' => 'Martin Fowler'
            ],
            [
                'title' => 'Test-driven Development',
                'author' => 'Kent Beck'
            ]
        ];
        return $data;
    }
}