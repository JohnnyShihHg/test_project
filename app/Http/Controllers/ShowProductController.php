<?php

namespace App\Http\Controllers;


use App\Services\ShowProductService;
use Illuminate\Http\Request;

class ShowProductController extends Controller
{
    private $service;

    public function __construct(ShowProductService $ShowProductService)
    {
        $this->service = $ShowProductService;
    }

    public function GetAllProducts(){
        return $this->service->GetAllProducts();
    }


}
