<?php

namespace Database\Seeders;

use App\Models\Book;
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
        //
        $faker = \Faker\Factory::create();
        for($i=0;$i<25;$i++){
            $item = [
                'publisher_id' => rand(1,13),
                'title' => $faker->text(20),
                'author' => $faker->name(),
                'year' => $faker->year('now'),
                'synopsis' => $faker->text(),
            ];
            Book::create($item);
        };
    }
}
