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
        
		DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'gary0087',
            'name' => '張凱文',
            'tel' => '0226086937',
            'mobile' => '0922086997',
            'email' => 'gary0087@abvc.com',
            'address' => '台北市內湖區瑞光路399號',
            'note' => '',
        ]);
        
		DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'dree0093',
            'name' => '李大文',
            'tel' => '0224573087',
            'mobile' => '0912396797',
            'email' => 'dree0093@ace.com',
            'address' => '台北市忠孝東路三段3號',
            'note' => '',
        ]);
        
		DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'eat9567',
            'name' => '王國榮',
            'tel' => '0224985325',
            'mobile' => '0978019598',
            'email' => 'eat9567@ace.com',
            'address' => '屏東縣琉球鄉中興路5號',
            'note' => '',
        ]);
        
		DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'dreak1583',
            'name' => '蕭志明',
            'tel' => '0223918666',
            'mobile' => '0987336995',
            'email' => 'dreak1583@yhow.com',
            'address' => '台北市北平東路30號',
            'note' => '',
        ]);
        
		DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'livie5688',
            'name' => '王瑞伶',
            'tel' => '0229180786',
            'mobile' => '0903368505',
            'email' => 'livie5688@auu.com',
            'address' => '桃園市八德區建國路384號',
            'note' => '',
        ]);
        
		DB::table('customers')->insert([
            'catno' => '0',
            'account' => 'super599',
            'name' => '洪雅婷',
            'tel' => '0222999307',
            'mobile' => '0922091623',
            'email' => 'super599@ace.com',
            'address' => '新北市新北產業園區五工二路117號',
            'note' => '',
        ]);

    }
}
