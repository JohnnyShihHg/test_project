<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /* 
        這樣寫會將每筆資料依有多少商品種類數量直接新增一筆商品
        應該有更好的寫法
    */
    public function run()
    {
        $productcategory = factory(App\Model\ProductCategoryModel::class)
            ->create()
            ->each(function ($productcategory) {
                $productcategory
                    ->Products()
                    ->save(factory(App\Model\ProductModel::class)
                        ->make());
            });
    }
}
