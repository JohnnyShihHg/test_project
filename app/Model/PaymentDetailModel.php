<?php

namespace App\Model;

use App\Entities\PaymentDetailEntity;
use Illuminate\Database\Eloquent\Model;

class PaymentDetailModel extends Model
{
    protected $PaymentDetail;

    public function __construct(PaymentDetailEntity $PaymentDetailEntity)
    {
        $this->paymentdetail = $PaymentDetailEntity;
    }


}
