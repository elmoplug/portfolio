<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
                'name' => 'ポケットモンスター'
         ]);
         
         
         DB::table('categories')->insert([
                'name' => 'モンスターハンター'
         ]);
         
         
         DB::table('categories')->insert([
                'name' => 'スーパーマリオブラザーズ'
         ]);
         
         
         DB::table('categories')->insert([
                'name' => '星のカービィ'
         ]);
         
         
         DB::table('categories')->insert([
                'name' => 'ゼルダの伝説'
         ]);
         
         DB::table('categories')->insert([
                'name' => 'ウマ娘'
         ]);
         
         DB::table('categories')->insert([
                'name' => 'ピクミン'
         ]);
         
         DB::table('categories')->insert([
                'name' => 'ファイナルファンタジー'
         ]);
         
         DB::table('categories')->insert([
                'name' => 'ドラゴンクエスト'
         ]);
         
         DB::table('categories')->insert([
                'name' => 'マリオカート'
         ]);
         
         
         
         DB::table('categories')->insert([
                'name' => 'その他'
         ]);
    }
}
