<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentDetailModel extends Model
{
    public function MyPayment(){
        return $this->belongsTo('App\Model\PaymentModel');
    }
}
