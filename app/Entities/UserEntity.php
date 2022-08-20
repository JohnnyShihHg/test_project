<?php

namespace App\Entities;

use App\Model\User_Model;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'phone', 'e-mail'
    ];
}
