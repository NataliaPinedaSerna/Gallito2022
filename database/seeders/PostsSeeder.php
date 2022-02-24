<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'content' => "Contenido del Post 1" ,
            'user_id' => 1 ,
        ]);

        DB::table('posts')->insert([
            'content' => "Contenido del Post 2" ,
            'user_id' => 1 ,
            'likes' => 45 ,
        ]);

        DB::table('posts')->insert([
            'content' => "Contenido del Post 3" ,
            'user_id' => 1 ,
        ]);

        DB::table('posts')->insert([
            'content' => "Contenido del Post 4" ,
            'user_id' => 2 ,
            'likes' => 30 ,
        ]);

        DB::table('posts')->insert([
            'content' => "Contenido del Post 5" ,
            'user_id' => 2 ,
        ]);

        DB::table('posts')->insert([
            'content' => "Contenido del Post 6" ,
            'user_id' => 3 ,
            'likes' => 15 ,
        ]);
    }
}
