<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Str;
use App\Models\Post;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p = new Post();
        $p->content = "Contenido del Post 1";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "Contenido del Post 2";
        $p->user_id = 1;
        $p->likes = 45;
        $p->save();

        $p = new Post();
        $p->content = "Contenido del Post 3";
        $p->user_id = 1;
        $p->save();

        $p = new Post();
        $p->content = "Contenido del Post 4";
        $p->user_id = 2;
        $p->likes = 30;
        $p->save();

        $p = new Post();
        $p->content = "Contenido del Post 5";
        $p->user_id = 2;
        $p->save();

        $p = new Post();
        $p->content = "Contenido del Post 6";
        $p->user_id = 3;
        $p->likes = 15;
        $p->save();

        /* 
        $p = new Post();
        $p->content = "";
        $p->user_id = ;
        $p->save(); 
        */
        
    }
}
