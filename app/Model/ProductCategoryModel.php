<?php

namespace App\Model;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Entities\ProductCategoryEntity;
use Illuminate\Database\Eloquent\Model;


class ProductCategoryModel extends Model
{
    use SoftDeletes;

    protected $productcategorys;

    public function __construct(ProductCategoryEntity $ProductCategoryEntity)
    {
        $this->productcategorys = $ProductCategoryEntity;
    }

    public function CreateProductCategory($data)
    {
        ProductCategoryEntity::create($data);
    }

    public function GetTotal($id)
    {
        return $this->productcategorys::find($id)->price;
        // return 'hello壓力山大';
    }
}
