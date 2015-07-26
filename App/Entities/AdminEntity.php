<?php namespace App\Entities;

use App\Entities\Entity;

class AdminEntity extends Entity
{
    private $id;
    protected $admin_key;

    public function isAdmin($admin_key)
    {
        return ($admin_key === 'admin');
    }
}
