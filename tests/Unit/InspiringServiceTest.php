<?php

namespace Tests\Unit;

use App\Services\InspiringService;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

class InspiringServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        /* 確認回傳的是字串就可以了 */
        self::assertIsString(
            (new InspiringService())->inspire()
        );
    }
}
