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
            'name' => "Laura Carolina Candamil Cortés",
            'email' => "laurac.candamilc@autonoma.edu.co",
            'password' => Hash::make('hola2345'),
        ]);

        DB::table('users')->insert([
            'name' => "Jaime Alonso Parra Lozada",
            'email' => "jaimea.parral@autonoma.edu.co",
            'password' => Hash::make('hola3456'),
        ]);

        DB::table('users')->insert([
            'name' => "Santiago Quintero Rodríguez",
            'email' => "santiago.quinteror@autonoma.edu.co",
            'password' => Hash::make('hola4567'),
        ]);

        /* DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
        ]); */
    }
}
