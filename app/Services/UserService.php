<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface
{
    public function createUser($data)
    {
        // TODO: Implement createUser() method.
    }

    public function getUser($user_id)
    {
        return User::where('user_id', $user_id)->first();
    }
}
