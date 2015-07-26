<?php namespace App\Entities;

class BookEntity
{
    private $id;
    protected $name;

    public function save($book_name)
    {
        return $book_name;
    }

    public function getId($book_id)
    {
        return ($book_id === 1);
    }
}
