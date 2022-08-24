<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class PaymentEntity extends Model
{
    protected $table = 'payments';

    protected $fillable = [
        'paymentstatus', 'user_entity_id','payment_detail_entity_id','total'
    ];

    public function PaymentDetail()
    {
        return $this->hasMany(PaymentDetailEntity::class);
    }
    public function MyPaymentDetail()
    {
        return $this->belongsTo(PaymentDetailEntity::class, 'Payment_Detail_entity_id');
    }
    public function User()
    {
        return $this->belongsTo(UserEntity::class, 'user_entity_id');
    }
}
