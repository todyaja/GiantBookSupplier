<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0;$i<55;$i++){
            $item = [
                'book_id' => rand(1,25),
                'category_id' => rand(1,5),
            ];
            BookCategory::create($item);
        };

    }
}
