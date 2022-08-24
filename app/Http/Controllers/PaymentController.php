<?php

namespace App\Http\Controllers;


use App\Services\PaymentService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $payments;

    public function __construct(PaymentService $PaymentService)
    {
        $this->payments = $PaymentService;
    }
    public function GetUserPayment($name)
    {
        return $this->payments->GetUserPayment($name);
    }
    public function GetUserPaymentOrder($name,$id)
    {
        return $this->payments->GetUserPaymentOrder($name,$id);
    }
    public function GetAllPayment()
    {
        return $this->payments->GetAllPayment();
    }

    public function CreatePayment(Request $request)
    {
        return $this->payments->CreatePayment($request);
    }
}
