<?php

namespace App\Services;

use App\Model\ProductModel;

class AddPaymentService 
{

    private $product;

    public function __construct(ProductModel $ProductModel)
    {
        $this->product = $ProductModel;
    }

    public function GetProduct()
    {
        /* 理應實現邏輯後調用方法 */
        return $this->product->show();
        // return 'hello';

    }
}
