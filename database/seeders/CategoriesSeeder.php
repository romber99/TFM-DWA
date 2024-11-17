<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name"=> "Thriller"
        ]);

        Category::create([
            "name"=> "Misterio"
        ]);

        Category::create([
            "name"=> "Comedia"
        ]);

        Category::create([
            "name"=> "Acción"
        ]);

        Category::create([
            "name"=> "Musical"
        ]);

        Category::create([
            "name"=> "Drama"
        ]);

        Category::create([
            "name"=> "Fantasía"
        ]);

        Category::create([
            "name"=> "Romance"
        ]);
    }
}
