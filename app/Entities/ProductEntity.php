<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;



class ProductEntity extends Model

{
    protected $table = 'products';
    protected $fillable = [
        'size', 'color','amount'
    ];

      /* 
        一個商品種類會有很多個商品，
        相對的一個商品只會有一個商品種類，
        例如商品種類叫做飲料，會有紅茶綠茶等商品，
        而紅茶只會有一個商品種類叫做飲料。
    */
    public function ProductCategory()
    {
        return $this->belongsTo(ProductCategoryEntity::class,'product_category_entity_id');
    }
}
