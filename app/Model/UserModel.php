<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Entities\User;

class User_Model extends Model
{
    public function CreateUser($name, $phone, $email)
    {
        $data = [
            'name' => $name,
            'phone' => $phone,
            'email' => $email
        ];
        User::create($data);
    }
}
