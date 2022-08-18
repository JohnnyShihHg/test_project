<?php

namespace App\Http\Controllers;


use App\Services\InspiringService;
use Illuminate\Http\Request;

class InspiringController extends Controller
{
    /* 宣告一個變數 */
    private $service;
    /* DI , 宣告建構子 */
    public function __construct(InspiringService $InspiringService)
    {
        $this->service = $InspiringService;
    }
    public function inspire()
    {
        /* 調用注入後的 InspiringService 裡的方法 */
        return $this->service->inspire();

        // /* 取用 InspiringService Class 建立實例使用內部方法 */
        // return (new InspiringService())->inspire();
    }
}
