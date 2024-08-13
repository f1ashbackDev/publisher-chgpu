<?php

namespace App\Services\Interfaces;

interface UserServiceInterface
{
    public function createUser($data);

    public function getUser($user_id);
}
