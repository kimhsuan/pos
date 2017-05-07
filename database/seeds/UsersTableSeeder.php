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
            'password' => '$2y$10$GTjQXxMuleYQsjbbQgPky.nuXQYsY56PzC7Wigkg6AIBmXyqbNp6a',
        ]);
    
    }
}
