<?php

namespace App\Services;

use App\Models\User;
use App\Services\Interfaces\UserServiceInterface;
use Illuminate\Support\Facades\Hash;

class UserService implements UserServiceInterface
{
    public function createUser($data)
    {
        $user = new User();
        $user->first_name = $data['firstname'];
        $user->name = $data['name'];
        $user->last_name = $data['lastname'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->number_phone = $data['number_phone'];
        $user->depart_id = $data['depart_id'];
        $user->save();
        return $user;
    }

    public function loginUser($data)
    {
        $user = User::where('email', $data['email'])->first();
        if($user != null){
            if(Hash::check($data['password'], $user->password)){
                return $user;
            }
            else{
                return "Неверный пароль";
            }
        }
        return "Аккаунт не найден";
    }
}
