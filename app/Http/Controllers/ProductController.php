<?php

namespace App\Http\Controllers;


use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $service;

    public function __construct(ProductService $ProductService)
    {
       return $this->service = $ProductService;
    }

    public function GetAllProducts(){
        return $this->service->GetAllProducts();
    }


}
