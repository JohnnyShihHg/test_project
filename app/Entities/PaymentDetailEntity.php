<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class PaymentDetailEntity extends Model
{
    protected $table = 'payment_details';

    protected $fillable = [
        'user_entity_id', 'payment_entity_id', 'product'
    ];

    public function Payment()
    {
        return $this->belongsTo(PaymentEntity::class, 'payment_entity_id');
    }
    public function User()
    {
        return $this->belongsTo(UserEntity::class, 'user_entity_id');
    }
}
