<?php namespace App\Controllers;

use App\Services\BookService;

class BookController
{
    public function __construct(BookService $service)
    {
        $this->service = $service;
    }

    public function addBook($book)
    {
        if (is_string($book)) {
            $this->service->can_add($book);
        }
    }
}
