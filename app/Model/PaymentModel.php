<?php

namespace App\Model;

use App\Entities\PaymentEntity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;


class PaymentModel extends Model
{
    use SoftDeletes;
    protected $payment;

    public function __construct(PaymentEntity $PaymentEntity)
    {
        $this->payment = $PaymentEntity;
    }

    public function show()
    {
        return 'this is a payment';
    }
}
