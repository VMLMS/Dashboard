<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FacadesDB::table("users")->insert([
             //Admin
             [
             "name"=> "Admin",
             "username"=> "admin",
             "email"=> "shivammishra.id@gmail.com",
             "password"=> Hash::make("111"),
             "role"=> "admin",
             "status"=> "1",
             ],

             // Instructor
             [
                "name"=> "Instructor",
                "username"=> "instructor",
                "email"=> "instructor@gmail.com",
                "password"=> Hash::make("111"),
                "role"=> "instructor",
                "status"=> "1",
                ],

                // Student
                [
                    "name"=> "Student",
                    "username"=> "student",
                    "email"=> "user@gmail.com",
                    "password"=> Hash::make("111"),
                    "role"=> "user",
                    "status"=> "1",
                    ],

        ]);
    }
}
