<?php

use Illuminate\Database\Seeder;


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
        /* laravel6 語法 */
        factory(App\Model\UserModel::class,2)->create();
        
        // App\Entities\UserEntity::factory(3)->create(); ← Laravel8

        // UserEntity::factory()->create(); ← 不知道為什麼無法實現

    }
}
