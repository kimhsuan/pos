<?php

use Illuminate\Database\Seeder;

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
            'user_id' => 1,
            'name' => '這是第一篇留言',
            'created_at' => \Carbon\Carbon::now()->addDays($number)
        ]);
    }
}
