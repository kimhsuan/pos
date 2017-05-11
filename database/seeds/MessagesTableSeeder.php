<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
            'user_id' => '1',
            'name' => '這是第一篇留言',
        ]);
        DB::table('messages')->insert([
            'user_id' => '2',
            'name' => '這是第二篇留言',
        ]);
    }
}
