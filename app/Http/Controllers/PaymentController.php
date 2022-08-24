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
    public function home()
    {
        return 'payment';
    }

    public function GetPayment()
    {
        return $this->payments->GetPayment();
    }
}
