<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;



class ProductEntity extends Model

{
    protected $table = 'products';
    protected $fillable = [
        'size', 'color','amount'
    ];
}
