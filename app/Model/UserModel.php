<?php

namespace App\Model;


use App\Entities\UserEntity;

class UserModel 
{
    public function CreateUser($name, $phone, $email,$password)
    {
        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password'=>$password
        ];
        UserEntity::create($data);
    }
}
