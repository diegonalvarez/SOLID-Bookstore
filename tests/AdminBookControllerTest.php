<?php namespace tests;

require 'vendor/autoload.php';
use App\Controllers\AdminBookController;
use App\Repositories\AdminRepository;
use App\Repositories\BookRepository;

class AdminBookControllerTest extends \PHPUnit_Framework_TestCase
{
    protected $name_book;
    protected $user_admin;

    public function __construct()
    {
        $this->test = new AdminBookController(new BookRepository, new AdminRepository);
    }

    public function testAddBookBookIsNumberAdminNot()
    {
        $this->name_book = 1;
        $this->user_admin = 2;
        var_dump($this->test->addBook($this->name_book, $this->user_admin));
    }

    public function testAddBookBookIsNumberAdminOk()
    {
        $this->name_book = 1;
        $this->user_admin = 1;
        var_dump($this->test->addBook($this->name_book, $this->user_admin));
    }

    public function testAddBookBookIsOkAdminOk()
    {
        $this->name_book = 'Pepe';
        $this->user_admin = 1;
        var_dump($this->test->addBook($this->name_book, $this->user_admin));
    }

    public function testAddBookBookIsOkAdminNot()
    {
        $this->name_book = 'Pepe';
        $this->user_admin = 'Pepe';
        var_dump($this->test->addBook($this->name_book, $this->user_admin));
    }

    public function testAddBookBookIsNullAdminNull()
    {
        $this->name_book = null;
        $this->user_admin = null;
        var_dump($this->test->addBook($this->name_book, $this->user_admin));
    }
}
