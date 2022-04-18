<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            ['name' => 'Movies'],
            ['name' => 'Sports'],
            ['name' => 'Games'],
            ['name' => 'Cartoons'],
            ['name' => 'Anime'],
        ];

        $category = Category::insert($category);
    }
}
