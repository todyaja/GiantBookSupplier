<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $items = collect([
            [
                'name' => 'Horror'
            ],
            [
                'name' => 'Action'
            ],
            [
                'name' => 'Comedy'
            ],
            [
                'name' => 'Romance'
            ],
            [
                'name' => 'Sci-fi'
            ],


        ])->each(function ($item){
            Category::create($item);
        });
    }
}
