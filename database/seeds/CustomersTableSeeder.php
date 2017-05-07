<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'gimmy24026015',
            'name' => '林俊宏',
            'tel' => '0922055966',
            'mobile' => '0987654321',
            'email' => 'gimmy24026015@gmail.com',
            'address' => '台中市北區大湖里大誠街130巷3-1號',
            'note' => '需要特別關注的客人，要求很多',
        ]);
        
        DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'cloagen',
            'name' => '陳淑芬',
            'tel' => '0987888269',
            'mobile' => '0987888269',
            'email' => 'cloagen@yahoo.com.tw',
            'address' => '彰化縣溪湖鎮福安路57號',
            'note' => '',
        ]);

        DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'haohao123',
            'name' => '林志豪',
            'tel' => '0937481040',
            'mobile' => '0937481040',
            'email' => 'haohao123@live.com',
            'address' => '台北市忠孝西路一段68號',
            'note' => '天龍人',
        ]);

        DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'hahaha999',
            'name' => '花千骨',
            'tel' => '0422280098',
            'mobile' => '0422280098',
            'email' => 'hahaha999@yahoo.com.tw',
            'address' => '新北市新莊區化成路382巷18號',
            'note' => '',
        ]);

        DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'steven5987',
            'name' => '史蒂芬',
            'tel' => '0226086677',
            'mobile' => '0987087987',
            'email' => 'steven5987@abc.com',
            'address' => '高雄市中華五路656號',
            'note' => '',
        ]);

    }
}
