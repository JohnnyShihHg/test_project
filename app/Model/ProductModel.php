<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
/* Entities */
use App\Entities\ProductEntity;


class ProductModel extends ProductEntity
{
    protected $table = 'products';

    /* 
        一個商品種類會有很多個商品，
        相對的一個商品只會有一個商品種類，
        例如商品種類叫做飲料，會有紅茶綠茶等商品，
        而紅茶只會有一個商品種類叫做飲料。
    */
    public function MyProduct()
    {
        return $this->belongsTo(App\Model\ProductCategoryModel::class);
    }

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
