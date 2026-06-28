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

            'category_id' => 1,
            'brand_id' => 1,

            'sku' => 'NB0001',

            'name' => 'Notebook Dell Inspiron',

            'slug' => 'notebook-dell-inspiron',

            'description' => 'Notebook i7 16GB RAM',

            'cost_price' => 3200,

            'sale_price' => 4200,

            'stock' => 20
        ]);
    }
}
