<?php

namespace App\Model;

use App\Entities\PaymentDetailEntity;
use Illuminate\Database\Eloquent\Model;

class PaymentDetailModel extends Model
{
    protected $paymentDetail;

    public function __construct(PaymentDetailEntity $PaymentDetailEntity)
    {
        $this->paymentdetail = $PaymentDetailEntity;
    }

    public function CreatePaymentDetail($request)
    {
        return $this->paymentdetail::create($request);
    }
    public function OrderPaymentDetailId($id)
    {
       return $this->paymentdetail::find($id);
    }
    public function OrderPaymentDetailLastId()
    {
       return $this->paymentdetail::latest('updated_at')->first()->id;
    }
    public function OrderPaymentDetailSum()
    {
       //
    }

}
