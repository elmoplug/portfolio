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
        /*DB::table('users')->insert([
            'name' => 'ピカチュウ',
            'email' => 'sample1@gmail.com',
            'password' => Hash::make('password1'),
            'introduction' => 'ポケモン好き',
            'image_url' => 'https://fastly.picsum.photos/id/815/200/200.jpg?hmac=7zFtysk327pj5h65VOYejVs4MTbaHLX4cvGw1UL2A88',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        */
        
        /*DB::table('users')->insert([
            'name' => 'よもぎ',
            'email' => 'sample2@gmail.com',
            'password' => Hash::make('password2'),
            'introduction' => '',
            'image_url' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        */
        
        /*DB::table('users')->insert([
            'name' => 'Bob',
            'email' => 'sample3@gmail.com',
            'password' => Hash::make('password3'),
            'introduction' => 'hello',
            'image_url' => 'https://fastly.picsum.photos/id/882/200/200.jpg?hmac=cVjON67mkFjmhVFCS4lYVS-iFp1D3KP-khmMizQxxhQ',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        */
        
        /*DB::table('users')->insert([
            'name' => '田中',
            'email' => 'sample4@gmail.com',
            'password' => Hash::make('password4'),
            'introduction' => 'よろしくお願いします。',
            'image_url' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        */
        
        /*DB::table('users')->insert([
            'name' => 'あああああ',
            'email' => 'sample5@gmail.com',
            'password' => Hash::make('password5'),
            'introduction' => 'モンハン初心者',
            'image_url' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        */
        
    }
}
