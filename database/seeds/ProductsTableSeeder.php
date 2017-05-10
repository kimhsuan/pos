<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('products')->insert([
            'catno' => 2,
            'name' => 'HTC 10 32GB',
            'price' => 13500,
            'stock' => 10,
            'save' => 2,
            'sold' => 0,
            'unit' => 0,
            'note' => '效能天!相機添!電池填!音效甜!',
        ]);
        
        DB::table('products')->insert([
            'catno' => 2,
            'name' => 'HTC A9 32G',
            'price' => 7500,
            'stock' => 5,
            'save' => 1,
            'sold' => 0,
            'unit' => 0,
            'note' => '足以強勢取代iPhone',
        ]);

        DB::table('products')->insert([
            'catno' => 2,
            'name' => 'HTC 10 EVO 32g',
            'price' => 10990,
            'stock' => 3,
            'save' => 1,
            'sold' => 0,
            'unit' => 0,
            'note' => 'hTC 10的S810超進化',
        ]);

        DB::table('products')->insert([
            'catno' => 2,
            'name' => 'iPhone 6 32GB',
            'price' => 12300,
            'stock' => 8,
            'save' => 2,
            'sold' => 0,
            'unit' => 0,
            'note' => 'iPhone 6 32GB',
        ]);

        DB::table('products')->insert([
            'catno' => 2,
            'name' => 'iPhone 6s 32GB',
            'price' => 18990,
            'stock' => 16,
            'save' => 2,
            'sold' => 0,
            'unit' => 0,
            'note' => 'iPhone 6s 32GB',
        ]);
        
		DB::table('products')->insert([
            'catno' => 3,
            'name' => 'iPad mini 4 128GB',
            'price' => 14990,
            'stock' => 16,
            'save' => 2,
            'sold' => 0,
            'unit' => 0,
            'note' => '玫瑰金色',
        ]);
        
        DB::table('products')->insert([
            'catno' => 2,
            'name' => 'iPhone SE 128GB',
            'price' => 18990,
            'stock' => 7,
            'save' => 2,
            'sold' => 0,
            'unit' => 0,
            'note' => '太空灰色',
        ]);
        
		DB::table('products')->insert([
            'catno' => 2,
            'name' => 'iPhone7 128GB',
            'price' => 27990,
            'stock' => 9,
            'save' => 3,
            'sold' => 0,
            'unit' => 0,
            'note' => '土豪金色',
        ]);

    }
}
