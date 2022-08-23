<?php

namespace App\Model;

use App\Entities\UserEntity;

class UserModel extends UserEntity
{

    public function Payment(){
        return $this->hasMany(PaymentModel::class);
    }
    public function PaymentDetail(){
        return $this->hasMany(PaymentDetailModel::class);
    }

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
