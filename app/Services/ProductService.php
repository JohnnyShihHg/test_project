<?php

namespace App\Services;

use App\Model\ProductModel;
use App\Model\ProductCategoryModel;

class ProductService
{

    private $product;
    private $productCategory;


    public function __construct(ProductModel $ProductModel, ProductCategoryModel $ProductCategoryModel)
    {
        $this->product = $ProductModel;
        $this->productCategory = $ProductCategoryModel;
    }



    public function GetProduct()
    {
        /* 理應實現邏輯後調用方法 */
        return $this->product->show();


    }

    public function GetAllProducts()
    {
        return $this->product->GetAllProducts();
    }

}
