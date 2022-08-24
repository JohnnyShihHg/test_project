<?php

namespace App\Services;

use App\Model\PaymentModel;

class PaymentService 
{

    private $product;

    public function __construct(PaymentModel $PaymentModel)
    {
        $this->payment = $PaymentModel;
    }

    public function GetPayment()
    {
        /* 理應實現邏輯後調用方法 */
        return $this->payment->show();
        // return 'hello';

    }
}
