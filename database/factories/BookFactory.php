<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use APP\Models\book ;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        book::truncate();
        return [
            'title' => fake()->word() ,
            'author' => fake()->lastName (),                                  
            'description' => fake()->text() ,
            'price' =>fake()->buildingNumber() ,
            'edition' => fake()->date($format = 'Y-m-d', $max = 'now') ,
            'submission' => fake()->date($format = 'Y-m-d', $max = 'now')
        ];
    }
}
