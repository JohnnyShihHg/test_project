<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
/* Entities */
use App\Entities\ProductEntity;


class ProductModel extends ProductEntity
{


    protected $table = 'products';
    /* 理應接收 http request 生成資料*/
    public function CreateProduct($data)
    {
        // $data = [
        //     'size' => $size,
        //     'color' => $color,
        //     'amount' => $amount,
        // ];
        ProductEntity::create($data);
    }
    public function show()
    {
        return ProductEntity::all();
    }
}
