<?php

namespace App\Repository\Interfaces;

interface UserRepositoryInterface
{
    public function create($data);

    public function update($userId, $data);

    public function getAll();

    public function getById($id);

    public function getByEmail($email);

    public function getByPhone($phone);

}
