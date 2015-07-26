<?php namespace App\Repositories;

use App\Interfaces\BookInterface;
use App\Entities\Entity;

class BookRepository implements BookInterface
{
    public function add($book_name)
    {
        return true;
    }

    public function stock(Entity $book_id)
    {
        return $book_id->getId($book_id);
    }
}
