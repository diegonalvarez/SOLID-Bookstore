<?php namespace App\Services;

use App\Interfaces\BookInterface;
use App\Interfaces\AdminInterface;

class AdminBookService
{
    public function __construct(BookInterface $repo_book, AdminInterface $repo_admin)
    {
        $this->repo_book = $repo_book;
        $this->repo_admin = $repo_admin;
    }

    public function add($book_name, $admin_key)
    {
        if ($this->repo_admin->isAdmin($admin_key)) {
            if ($this->repo_book->add($book_name)) {
                return 'Libro agregado';
            }
        }

        return 'Permission denied.';
    }

    public function provide($book_id)
    {
        return $this->repo_book->stock($book_id);
    }
}
