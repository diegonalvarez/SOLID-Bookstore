<?php namespace App\Entities;

class BookEntity
{
    private $id;
    protected $name;

    public function save($book_name)
    {
        return $book_name;
    }
}
