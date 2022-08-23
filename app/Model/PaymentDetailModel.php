<?php

namespace App\Model;

use App\Entities\PaymentDetailEntity;

class PaymentDetailModel extends PaymentDetailEntity
{
    protected $table = 'payment_details';

    public function Payment(){
        return $this->belongsTo(PaymentModel::class, 'payment_model_id');
    }
    public function User(){
        return $this->belongsTo(UserModel::class, 'user_model_id');
    }

}
