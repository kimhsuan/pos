<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'first_name' => 'Hsuan',
            'last_name' => 'Lai',
            'username' => 'hsuan',
            'email' => 'a@a.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Qoo',
            'last_name' => 'Qoo',
            'username' => 'bing',
            'email' => 'qoo@qoo.com',
            'password' => bcrypt('bbbbbb'),
        ]);
        DB::table('users')->insert([
            'first_name' => 'Genius',
            'last_name' => 'Aaa',
            'username' => 'geniusaa',
            'email' => 'test@test.com',
            'password' => bcrypt('692K10DjqT'),
        ]);
    }
}
