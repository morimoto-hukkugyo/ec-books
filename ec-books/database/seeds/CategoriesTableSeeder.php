<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // カテゴリー情報を作成
        $categories = ['未分類', 'ミステリー', '青春', '恋愛', 'SF', 'ファンタジー', 'ホラー', 'ライトノベル', '経済小説', '政治小説', '歴史小説', '児童小説'];
        foreach($categories as $category) {
            DB::table('p_categories')->insert([
                'name' => $category
            ]);
        }
    }
}
