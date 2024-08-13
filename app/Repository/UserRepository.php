<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return User::all();
    }

    public function getById($id)
    {
        return ;
    }
}
