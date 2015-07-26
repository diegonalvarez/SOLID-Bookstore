<?php namespace App\Interfaces;

use App\Entities\AdminEntity;

interface AdminInterface
{
    public function isAdmin($admin);
}
