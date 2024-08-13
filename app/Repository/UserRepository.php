<?php

namespace App\Repository;

use App\Models\User;
use App\Repository\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{
    public function create($data)
    {
        // TODO: Implement create() method.
    }

    public function update($userId, $data)
    {
        // TODO: Implement update() method.
    }

    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return User::all();
    }

    public function getById($id): \Illuminate\Database\Eloquent\Collection
    {
        return User::find($id);
    }

    public function getByEmail($email): \Illuminate\Database\Eloquent\Collection
    {
        return User::where('email', $email)->first();
    }

    public function getByPhone($phone): \Illuminate\Database\Eloquent\Collection
    {
        return User::where('phone', $phone)->first();
    }
}
