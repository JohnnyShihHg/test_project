<?php

namespace App\Entities;
use Illuminate\Database\Eloquent\Model;


class UserEntity  extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'phone', 'email','password'
    ];

    public function Payment()
    {
        return $this->hasMany(PaymentEntity::class);
    }
    public function PaymentDetail()
    {
        return $this->hasMany(PaymentDetailEntity::class);
    }


}
