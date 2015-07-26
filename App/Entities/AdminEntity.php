<?php namespace App\Entities;

class AdminEntity
{
    private $id;
    protected $admin_key;

    public function isAdmin($admin_key)
    {
        return ($admin_key === 'admin');
    }
}
