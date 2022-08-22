<?php

namespace App\Model;

use App\Entities\PaymentDetailEntity;

class PaymentDetailModel extends PaymentDetailEntity
{
    protected $table = 'payment_details';

    public function MyPayment(){
        return $this->belongsTo('App\Model\PaymentModel');
    }
}
