<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Organic Honey',
            'description' => 'Our organic honey is sourced from the finest bees and flowers, ensuring a pure and natural taste. It\'s perfect for your tea, toast, or as a natural sweetener.',
            'price' => 59.00,
        ]);
    }
}
