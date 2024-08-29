<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [   
                'name' => 'กาแฟดำ', 
                'cost' => 40, 
                'price'=> 50, 
                'qty'=> 100, 
                'image_url'=>'https://pangpond.com/wp-content/uploads/%E0%B8%81%E0%B8%B2%E0%B9%81%E0%B8%9F%E0%B8%94%E0%B8%B3.jpg', 
                'product_type_id'=> 2,
            ],
            [
                'name' => 'โค้ก', 
                'cost' => 20, 
                'price'=> 30, 
                'qty'=> 100, 
                'image_url'=>'https://wtksupermarket.com/upload-img/011/0116/01162/8851959158074.jpg', 
                'product_type_id'=>2,
                ]
        ];
        DB::table('products')->insert($data);
    }
}
