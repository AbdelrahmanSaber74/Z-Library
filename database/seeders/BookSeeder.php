<?php

namespace Database\Seeders;

use App\Models\book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        book::truncate();

        book::create([

            'title' => "Test" ,
            'author' => 'Test Author' ,
            'description' => 'Admin  description'  ,
            'price' => '100' ,
            'path'=> url('../imges/search.jpg') ,

            'edition' => '2022-09-06' ,
            'submission' => '2022-09-06' ,

        ]);


  



    }
}
