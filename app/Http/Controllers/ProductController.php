<?php

namespace App\Http\Controllers;


use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    private $service;

    public function __construct(ProductService $ProductService)
    {
        $this->service = $ProductService;
    }
    public function GetProduct()
    {
        return $this->service->GetProduct();

    }
}
