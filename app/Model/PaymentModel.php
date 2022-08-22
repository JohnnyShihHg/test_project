<?php

namespace App\Model;

use App\Entities\PaymentEntity;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentModel extends PaymentEntity
{
    use SoftDeletes;
    protected $table = 'payments';

    public function MyPaymentDetail()
    {
        return $this->hasMany('App\Model\PaymentModel');

    }
    public function CreatePayment()
    {
    }
}
