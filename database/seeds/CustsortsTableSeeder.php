<?php

use Illuminate\Database\Seeder;

class CustsortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('custsorts')->insert([
            'name' => '未分類',
        ]);
        DB::table('custsorts')->insert([
            'name' => '露天拍賣',
        ]);
        DB::table('custsorts')->insert([
            'name' => '奇摩拍賣',
        ]);

    }
}
