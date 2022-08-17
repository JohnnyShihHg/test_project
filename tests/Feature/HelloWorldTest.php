<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloWorldTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        /* 如果訪問到/hello_world */
        $response = $this->get('/hello_world');
        /* Http Status回報200 */
        $response->assertStatus(200);
        /* 進入網頁應該要看到的字樣 */
        $response->assertSee('Hello World');
    }
}
