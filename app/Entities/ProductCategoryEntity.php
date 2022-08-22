<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;


class ProductCategoryEntity extends Model
{
    
    protected $table = 'product_categorys';

    protected $fillable = [
        'product_name', 'price'
    ];
}
