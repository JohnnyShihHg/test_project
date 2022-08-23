<?php

namespace App\Model;

use App\Entities\UserEntity;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $user;

    public function __construct(UserEntity $userEntity)
    {
        $this->user = $userEntity;
    }


    public function CreateUser($name, $phone, $email, $password)
    {
        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'password' => $password
        ];
        UserEntity::create($data);
    }
}
