<?php

namespace Tests\Unit;

use App\Http\Controllers\InspiringController;
use App\Services\InspiringService;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class InspiringControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testInspire()
    {
        /* 使用 Mockery 製作仿造物,將 mock 作為 InspiringService 的仿造物 */
        $mock = \Mockery::mock(InspiringService::class);
        /* 宣告 mock 呼叫 inspire 返回 名言 */
        $mock->shouldReceive('inspire')->andReturn('名言');
        /* 繼承 InspiringController 的 mock 物件 */
        $inspiringController = new InspiringController($mock);
        /* 斷言回傳相同 */
        self::assertEquals(
            '名言',
            $inspiringController->inspire()
        );
    }
}
