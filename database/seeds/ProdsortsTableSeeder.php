<?php

use Illuminate\Database\Seeder;

class ProdsortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('prodsorts')->insert([
            'name' => '未分類',
        ]);
        DB::table('prodsorts')->insert([
            'name' => '手機',
        ]);
        DB::table('prodsorts')->insert([
            'name' => '平板電腦',
        ]);

    }
}
