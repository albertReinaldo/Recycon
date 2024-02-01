<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "username" => "admin",
            "email" => "admin@gmail.com",
            "password" => Hash::make('admin123'),
            "confirm_password" => Hash::make('admin123'),
            "is_admin" => true
        ]);

        DB::table('users')->insert([
            "username" => "customer",
            "email" => "customer@gmail.com",
            "password" => Hash::make('customer123'),
            "confirm_password" => Hash::make('customer123'),
            "is_admin" => false
        ]);
    }
}
