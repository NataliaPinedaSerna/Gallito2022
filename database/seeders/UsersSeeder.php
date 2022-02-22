<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Natalia Pineda Serna",
            'email' => "natalia.pinedas@autonoma.edu.co",
            'password' => Hash::make('hola1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Don Asistente",
            'email' => "asistente@autonoma.edu.co",
            'password' => Hash::make('wola1234'),
        ]);

        DB::table('users')->insert([
            'name' => "Diseñadora",
            'email' => "diseno@autonoma.edu.co",
            'password' => Hash::make('lola1234'),
        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
