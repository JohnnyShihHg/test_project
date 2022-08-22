<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Entities\ProductCategoryEntity;

class ProductCategoryModel extends Model
{
    use SoftDeletes;

    public function MyProduct()
    {
        return $this->hasOne('App\Model\ProductModel');
        // ProductCategoryEntity::MyProduct();
    }

    public function CreateProduct($size, $color, $amount)
    {
        $data = [
            'size' => $size,
            'color' => $color,
            'amount' => $amount,
        ];
        ProductCategoryEntity::create($data);
    }
}
