<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('posts')->insert([
            'user_id' => 1,
            'category_id' => 1,
            'content' => 'ピカチュウ可愛い><',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        */
        
        DB::table('posts')->insert([
            'user_id' => 3,
            'category_id' => 2,
            'content' => '一狩り行きませんか？',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 4,
            'category_id' => 6,
            'content' => 'So difficult..',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 3,
            'category_id' => 2,
            'content' => '一狩り行きたいです。',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('posts')->insert([
            'user_id' => 5,
            'category_id' => 9,
            'content' => 'ボスが強すぎる',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
