<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentModel extends Model
{
    use SoftDeletes;
    public function MyPaymentDetail()
    {
        return $this->hasMany('App\Model\PaymentModel');

    }
    public function CreatePayment()
    {
    }
}
