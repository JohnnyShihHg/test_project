<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class PaymentDetailEntity extends Model
{
    protected $table = 'payment_details';

    protected $fillable = [
        'detail', 'phone', 'email'
    ];

    public function Payment()
    {
        return $this->belongsTo(PaymentModel::class, 'payment_entity_id');
    }
    public function User()
    {
        return $this->belongsTo(UserModel::class, 'user_entity_id');
    }
}
