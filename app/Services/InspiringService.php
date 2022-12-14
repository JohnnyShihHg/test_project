<?php
/* 建立一個Services層擺放邏輯 */

namespace App\Services;

class InspiringService
{
    public function inspire()
    {
        /* 隨機抽選 */
        $choose = [
            '「失敗為成功之母。」- 愛迪生',
            '「簡潔是最終的精密。」– 李奧納多‧達文西',
            '「好的開始是成功的一半」- 荷拉斯',
        ];
        $key = rand(0, 2);
        return $choose[$key];
    }
}
