<?php

namespace App\Repository\Interfaces;

interface UserRepositoryInterface
{
    public function getAll();
    public function getById($id);
}
