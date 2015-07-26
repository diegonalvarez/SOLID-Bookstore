<?php namespace App\Controllers;

use App\Services\AdminBookService;
use App\Repositories\BookRepository;
use App\Repositories\AdminRepository;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class AdminBookController
{
    public function __construct(BookRepository $repo_book, AdminRepository $repo_admin)
    {
        $this->repo_book = $repo_book;
        $this->repo_admin = $repo_admin;
        $this->service = new AdminBookService($this->repo_book, $this->repo_admin);
    }

    public function addBook($book_name, $admin_key)
    {
        if (is_string($book_name)) {
            return $this->service->add($book_name, $admin_key);
        }

        $log = new Logger('admin_book');
        $log->pushHandler(new StreamHandler($_SERVER['PWD'].'/logs/erros.log', Logger::DEBUG));

        $log->addDebug('Invalid format book', array('book_name' => $book_name));

        return 'The book has a incorrect format.';
    }

    public function provideBook($book_id)
    {
        if (is_numeric($book_id)) {
            return $this->service->provide($book_id);
        }

        return 'The book has a wrong format.';
    }
}
