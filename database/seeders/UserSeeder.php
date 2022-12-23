<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User ;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        user::truncate();

        user::create([

            'name' => "Admin" ,
            'email' => 'admin@gmail.com' ,
            'is_admin' => '1' ,
            'password' => Hash::make(123456789)

        ]);


        user::create([

            'name' => "user" ,
            'email' => 'user@gmail.com' ,
            'password' => Hash::make(123456789)

        ]);




    }
}
