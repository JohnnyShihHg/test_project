<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class PaymentDetailEntity extends Model
{
    protected $table = 'payment_details';

    protected $fillable = [
        'detail', 'phone', 'email'
    ];
}
