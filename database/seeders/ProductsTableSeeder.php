<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // for ($i = 1; $i <= 20; $i++) {
        //     DB::table('products')->insert([
        //         'name' => 'Product ' . $i,
        //         'description' => 'Description for Product ' . $i,
        //         'price' => rand(10, 100), // Generating random price for demonstration
        //         'quantity' => rand(5, 50), // Generating random quantity for demonstration
        //         'created_at' => now(),
        //         'updated_at' => now(),
        //     ]);
        // }
    }
}
