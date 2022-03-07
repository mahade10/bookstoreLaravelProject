<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Book::truncate();
        $faker = \Faker\Factory::create();
        for($i=0;$i<6;$i++){
            Book::create([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'isbn' => $faker ->isbn10,
                'price' => $faker -> numberBetween(200,300),

            ]);
        }

    }
}
