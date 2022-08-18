<?php

namespace App\Http\Controllers;


use App\Services\InspiringService;
use Illuminate\Http\Request;

class InspiringController extends Controller
{
    public function inspire()
    {
        /* 取用 InspiringService Class 建立實例使用內部方法 */
        return (new InspiringService())->inspire();
    }
}
