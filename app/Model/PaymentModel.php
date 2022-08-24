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

    public function GetAllPayment()
    {
        return $this->payment::all();
    }

    public function GetUserPayment($uid)
    {
        //可以更好找出商品名稱多建立一層關係
        $order = $this->payment::with('PaymentDetail')->where('user_entity_id', $uid)->get();
        return $order;
    }
    public function GetUserPaymentOrder($uid,$id)
    {
        $order = $this->payment::with('PaymentDetail')->where('user_entity_id', $uid)->get();
        return $order[$id-1];
    }
    public function MakeRLS($lastPayment, $lastPaymentDetail)
    {

        return $lastPayment->PaymentDetail()->save($lastPaymentDetail);
    }

    public function CreatePayment($request)
    {
        return $this->payment::create($request);
    }
    public function PaymentOrder()
    {
        return $this->payment::latest('updated_at')->first();
    }
}
