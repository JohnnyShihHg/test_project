<?php

use App\Entities\UserEntity;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* 可以直接用 Factory 的資料來創建 */
        factory(App\Entities\UserEntity::class)->create();
        
        // App\Entities\UserEntity::factory(3)->create(); ← Laravel8

        // UserEntity::factory()->create(); ← 不知道為什麼無法實現

    }
}
