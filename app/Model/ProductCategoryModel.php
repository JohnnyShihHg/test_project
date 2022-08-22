<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Entities\ProductCategoryEntity;

class ProductCategoryModel extends ProductCategoryEntity
{
    use SoftDeletes;
    protected $table = 'product_categorys';

    /*
        可擁有多個物件 
        當使用Product()->save(product物件)
        可以將 PuoductCategory 的 id 寫入到 Product 由此建立關係
        建立關係後可以透過 ->Product 查詢到有關聯的 Product
        會自動生成動態屬性將有包含在內的都包成 Collection


    */
    public function Products()
    /* 定義有關連的地方 */
    {
        return $this->hasMany(ProductModel::class);
        // return 'hello';
    }

    public function CreateProductCategory($data)
    {
        ProductCategoryEntity::create($data);
    }
 
}
