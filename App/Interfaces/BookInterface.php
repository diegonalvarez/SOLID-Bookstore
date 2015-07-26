<?php namespace App\Interfaces;

use App\Entities\Entity;

interface BookInterface
{
    public function add($book);
    public function stock(Entity $book_id);
}
