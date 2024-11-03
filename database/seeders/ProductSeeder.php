<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('products')->insert(
            [
                // Makanan (category_id = 1)
                ['name' => 'Nasi Goreng', 'category_id' => 1, 'selling_price' => 15000, 'purchase_price' => 10000, 'img' => 'example1.jpeg'],
                ['name' => 'Ayam Geprek', 'category_id' => 1, 'selling_price' => 18000, 'purchase_price' => 12000, 'img' => 'example2.jpeg'],
                ['name' => 'Bakso', 'category_id' => 1, 'selling_price' => 13000, 'purchase_price' => 9000, 'img' => 'example3.jpeg'],
                ['name' => 'Mie Ayam', 'category_id' => 1, 'selling_price' => 14000, 'purchase_price' => 10000, 'img' => 'example4.jpeg'],
                ['name' => 'Soto Ayam', 'category_id' => 1, 'selling_price' => 15000, 'purchase_price' => 10000, 'img' => 'example1.jpeg'],
                ['name' => 'Rendang', 'category_id' => 1, 'selling_price' => 25000, 'purchase_price' => 18000, 'img' => 'example2.jpeg'],
                ['name' => 'Gado-Gado', 'category_id' => 1, 'selling_price' => 12000, 'purchase_price' => 8000, 'img' => 'example3.jpeg'],

                // Minuman (category_id = 2)
                ['name' => 'Es Teh', 'category_id' => 2, 'selling_price' => 5000, 'purchase_price' => 2000, 'img' => 'example4.jpeg'],
                ['name' => 'Es Jeruk', 'category_id' => 2, 'selling_price' => 6000, 'purchase_price' => 3000, 'img' => 'example1.jpeg'],
                ['name' => 'Kopi Hitam', 'category_id' => 2, 'selling_price' => 8000, 'purchase_price' => 4000, 'img' => 'example2.jpeg'],
                ['name' => 'Jus Mangga', 'category_id' => 2, 'selling_price' => 10000, 'purchase_price' => 6000, 'img' => 'example3.jpeg'],
                ['name' => 'Air Mineral', 'category_id' => 2, 'selling_price' => 3000, 'purchase_price' => 1000, 'img' => 'example4.jpeg'],
                ['name' => 'Teh Tarik', 'category_id' => 2, 'selling_price' => 9000, 'purchase_price' => 5000, 'img' => 'example1.jpeg'],

                // Tusukan (category_id = 3)
                ['name' => 'Sate Ayam', 'category_id' => 3, 'selling_price' => 15000, 'purchase_price' => 10000, 'img' => 'example2.jpeg'],
                ['name' => 'Sate Kambing', 'category_id' => 3, 'selling_price' => 20000, 'purchase_price' => 15000, 'img' => 'example3.jpeg'],
                ['name' => 'Sate Sapi', 'category_id' => 3, 'selling_price' => 22000, 'purchase_price' => 17000, 'img' => 'example4.jpeg'],
                ['name' => 'Sate Usus', 'category_id' => 3, 'selling_price' => 7000, 'purchase_price' => 4000, 'img' => 'example1.jpeg'],
                ['name' => 'Sate Telur Puyuh', 'category_id' => 3, 'selling_price' => 8000, 'purchase_price' => 5000, 'img' => 'example2.jpeg'],
                ['name' => 'Sate Kerang', 'category_id' => 3, 'selling_price' => 10000, 'purchase_price' => 6000, 'img' => 'example3.jpeg'],

            ]
        );
    }
}
