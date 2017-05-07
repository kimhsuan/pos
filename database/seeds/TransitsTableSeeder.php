<?php

use Illuminate\Database\Seeder;

class TransitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('transits')->insert([
            'name' => '無',
        ]);
        DB::table('transits')->insert([
            'name' => '郵寄',
        ]);
        DB::table('transits')->insert([
            'name' => '宅配',
        ]);

    }
}
