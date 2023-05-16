<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            "title"=>"猫について",
            "text"=>"猫はかわいい",
            "user_id"=>1
        ]);
        DB::table('posts')->insert([
            "title"=>"犬について",
            "text"=>"犬はかわいい",
            "user_id"=>1
        ]);
        DB::table('posts')->insert([
            "title"=>"鳥について",
            "text"=>"鳥はかわいい",
            "user_id"=>2
        ]);
    }
}
