<?php

use Illuminate\Database\Seeder;

class UnitsTableSeeder extends Seeder
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
            'name' => '個',
        ]);
        DB::table('transits')->insert([
            'name' => '支',
        ]);

    }
}
