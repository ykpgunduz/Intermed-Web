<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'MRI',
                'slug' => Str::slug('MRI'),
                'description' => 'MRI ürünleri kategorisi',
            ],
            [
                'name' => 'CT',
                'slug' => Str::slug('CT'),
                'description' => 'CT ürünleri kategorisi',
            ],
            [
                'name' => 'X-Ray',
                'slug' => Str::slug('X-Ray'),
                'description' => 'X-Ray ürünleri kategorisi',
            ],
            [
                'name' => 'Injektor',
                'slug' => Str::slug('Injektor'),
                'description' => 'Injektor ürünleri kategorisi',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
