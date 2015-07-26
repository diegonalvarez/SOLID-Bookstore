<?php namespace App\Repositories;

use App\Interfaces\BookInterface;

class BookRepository implements BookInterface
{
    public function add($book_name)
    {
        return true;
    }
}
