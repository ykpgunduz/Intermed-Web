<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name' => 'Akıllı Telefon',
                'slug' => Str::slug('Akıllı Telefon'),
                'description' => 'Son model akıllı telefon',
                'price' => 15000,
                'image' => 'phone.jpg',
                'category_id' => 1,
                'brand_id' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Laptop',
                'slug' => Str::slug('Laptop'),
                'description' => 'Yüksek performanslı dizüstü bilgisayar',
                'price' => 25000,
                'image' => 'laptop.jpg',
                'category_id' => 1,
                'brand_id' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Kablosuz Kulaklık',
                'slug' => Str::slug('Kablosuz Kulaklık'),
                'description' => 'Gürültü önleyici özellikli kulaklık',
                'price' => 2500,
                'image' => 'headphones.jpg',
                'category_id' => 2,
                'brand_id' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Akıllı Saat',
                'slug' => Str::slug('Akıllı Saat'),
                'description' => 'Fitness takibi yapabilen akıllı saat',
                'price' => 3500,
                'image' => 'smartwatch.jpg',
                'category_id' => 2,
                'brand_id' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Tablet',
                'slug' => Str::slug('Tablet'),
                'description' => '10.5 inç ekranlı tablet',
                'price' => 8000,
                'image' => 'tablet.jpg',
                'category_id' => 1,
                'brand_id' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Bluetooth Hoparlör',
                'slug' => Str::slug('Bluetooth Hoparlör'),
                'description' => 'Taşınabilir kablosuz hoparlör',
                'price' => 1200,
                'image' => 'speaker.jpg',
                'category_id' => 2,
                'brand_id' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Oyun Konsolu',
                'slug' => Str::slug('Oyun Konsolu'),
                'description' => 'Yeni nesil oyun konsolu',
                'price' => 12000,
                'image' => 'console.jpg',
                'category_id' => 3,
                'brand_id' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Kamera',
                'slug' => Str::slug('Kamera'),
                'description' => 'Profesyonel fotoğraf makinesi',
                'price' => 18000,
                'image' => 'camera.jpg',
                'category_id' => 3,
                'brand_id' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Monitör',
                'slug' => Str::slug('Monitör'),
                'description' => '27 inç 4K gaming monitör',
                'price' => 7500,
                'image' => 'monitor.jpg',
                'category_id' => 1,
                'brand_id' => null,
                'status' => 'active',
            ],
            [
                'name' => 'Klavye',
                'slug' => Str::slug('Klavye'),
                'description' => 'Mekanik gaming klavye',
                'price' => 1800,
                'image' => 'keyboard.jpg',
                'category_id' => 2,
                'brand_id' => null,
                'status' => 'active',
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
