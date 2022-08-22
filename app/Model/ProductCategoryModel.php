<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Entities\ProductCategoryEntity;

class ProductCategoryModel extends ProductCategoryEntity
{
    use SoftDeletes;
    protected $table = 'product_categorys';

    /* 可擁有多個物件 */
    public function Product()
    {
        return $this->hasMany(App\Model\ProductModel::class);
    }

    public function CreateProductCategory($data)
    {
        ProductCategoryEntity::create($data);
    }
}
