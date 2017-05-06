<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'catno' => 1,
            'name' => 'HTC 10 32GB',
            'price' => 13500,
            'cost' => 12500,
            'stock' => 10,
            'save' => 2,
            'unit' => 0,
            'note' => '效能天!相機添!電池填!音效甜!',
        ]);
        
        DB::table('products')->insert([
            'catno' => 1,
            'name' => 'HTC A9 32G',
            'price' => 7500,
            'cost' => 6500,
            'stock' => 5,
            'save' => 1,
            'unit' => 0,
            'note' => '足以強勢取代iPhone',
        ]);

        DB::table('products')->insert([
            'catno' => 1,
            'name' => 'HTC 10 EVO 32g',
            'price' => 10990,
            'cost' => 9990,
            'stock' => 3,
            'save' => 1,
            'unit' => 0,
            'note' => 'hTC 10的S810超進化',
        ]);

        DB::table('products')->insert([
            'catno' => 1,
            'name' => 'iPhone 6 32GB',
            'price' => 12300,
            'cost' => 11300,
            'stock' => 8,
            'save' => 2,
            'unit' => 0,
            'note' => 'iPhone 6 32GB',
        ]);

        DB::table('products')->insert([
            'catno' => 1,
            'name' => 'iPhone 6s 32GB',
            'price' => 18990,
            'cost' => 17990,
            'stock' => 16,
            'save' => 2,
            'unit' => 0,
            'note' => 'iPhone 6s 32GB',
        ]);

    }
}
