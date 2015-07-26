<?php namespace App\Controllers;

use App\Services\AdminBookService;
use App\Repositories\BookRepository;
use App\Repositories\AdminRepository;

class AdminBookController
{
    public function __construct()
    {
        $repo_book = new BookRepository;
        $repo_admin = new AdminRepository;
        $this->service = new AdminBookService($repo_book, $repo_admin);
    }

    public function addBook($book_name, $admin_key)
    {
        if (!is_string($book_name)) {
            return 'The books has a incorrect format.';
        }

        return $this->service->add($book_name, $admin_key);
    }
}
