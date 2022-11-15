<?php

namespace App\Models;

use App\Entities\DvdEntity;
use PDO;

class DvdsModel
{
//    private array $dvds = [
//        1 => ['title' => 'Toy Story'],
//        2 => ['title' => 'Toy Story 2'],
//        3 => ['title' => 'Toy Story 3'],
//        4 => ['title' => 'Toy Story 4']
//    ];

    private PDO $db;
    private array $dvds;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function getDvd(int $id): array
    {
        $query = $this->db->prepare(
            'SELECT `id`, `title` FROM `dvds` WHERE `id` = :id;'
        );
        $query->bindParam(':id', $id);
//        $query->setFetchMode(PDO::FETCH_ASSOC);
        $query->execute();
        return $query->fetch();
//        return $this->dvds[$id];
    }

    /**
     * @return array
     */
    public function getDvds(): array
    {
        $query = $this->db->prepare(
            'SELECT `id`, `title` FROM `dvds`;'
        );
        $query->execute();
        return $query->fetchAll();
    }
}