<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            "name"=>Str::random(10),
            "email"=>Str::random(10)."@mail.ru",
            'password' => Hash::make('password')
            // php artisan db:seed --force -> himoya qilish seed ni.
            // php artisan migrate:fresh --seed -> seed ni o`chirish, tozalash                         
        ]);
    }
}
