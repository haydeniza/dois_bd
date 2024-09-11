<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (!Product::where('name', 'Teclado')->first()){
            Product::create([
                'name' => 'Teclado',
            ]);
        }
        if (!Product::where('name', 'Notebook')->first()){
            Product::create([
                'name' => 'Notebook',
            ]);
        }
    }
}

