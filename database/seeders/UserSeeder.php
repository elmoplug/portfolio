<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ピカチュウ',
            'email' => 'sample1@gmail.com',
            'password' => Hash::make('password1'),
            'introduction' => 'ポケモン好き',
            'image_url' => 'https://fastly.picsum.photos/id/815/200/200.jpg?hmac=7zFtysk327pj5h65VOYejVs4MTbaHLX4cvGw1UL2A88',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
