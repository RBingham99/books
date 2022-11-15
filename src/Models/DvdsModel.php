<?php

namespace App\Models;

class DvdsModel
{
    private array $dvds = [
        1 => ['title' => 'Toy Story'],
        2 => ['title' => 'Toy Story 2'],
        3 => ['title' => 'Toy Story 3'],
        4 => ['title' => 'Toy Story 4']
    ];

    public function getDvd(int $id): array
    {
        return $this->dvds[$id];
    }
}