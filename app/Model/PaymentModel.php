<?php

namespace App\Model;

use App\Entities\PaymentEntity;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaymentModel extends PaymentEntity
{
    use SoftDeletes;
    protected $table = 'payments';



    public function PaymentDetail()
    {
        return $this->hasMany(PaymentDetailModel::class);
    }
    public function MyPaymentDetail(){
        return $this->belongsTo(PaymentDetailModel::class, 'Payment_Detail_model_id');
    }
    public function User(){
        return $this->belongsTo(UserModel::class, 'user_model_id');
    }

    public function CreatePayment()
    {
    }
}
