<?php

namespace App\Http\Controllers;


use App\Services\InspiringService;
use Illuminate\Http\Request;

class InspiringController extends Controller
{
    public function inspire()
    {
        /* 建立實例 */
        return (new InspiringService())->inspire();
    }
}
