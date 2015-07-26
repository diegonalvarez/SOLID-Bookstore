<?php namespace App\Repositories;

use App\Interfaces\AdminInterface;

class AdminRepository implements AdminInterface
{
    private $admin_key = 1;

    public function isAdmin($admin_key)
    {
        if ($this->admin_key === $admin_key) {
            return true;
        }

        return null;
    }
}
