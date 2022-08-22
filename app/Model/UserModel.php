<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Entities\UserEntity;

class UserModel extends Model
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
