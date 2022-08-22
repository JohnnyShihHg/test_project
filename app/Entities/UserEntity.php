<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class UserEntity  extends Model

{


    protected $table = 'users';

    protected $fillable = [
        'name', 'phone', 'e-mail'
    ];
}
