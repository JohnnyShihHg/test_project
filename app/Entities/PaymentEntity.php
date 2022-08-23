<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class PaymentEntity extends Model
{
    protected $table = 'payments';

    public function PaymentDetail()
    {
        return $this->hasMany(paymentdetail::class);
    }
    public function MyPaymentDetail()
    {
        return $this->belongsTo(paymentdetail::class, 'Payment_Detail_model_id');
    }
    public function User()
    {
        return $this->belongsTo(UserModel::class, 'user_model_id');
    }
}
