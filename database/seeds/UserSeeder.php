<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Rongon Bairagee',
            'email'=> 'rongonbairagee@gmail.com',
            'password'=>'9122143'
        ]);
        DB::table('users')->insert([
            'name'=> 'Chonchol Bairagee',
            'email'=> 'rbchonchol1999@gmail.com',
            'password'=>'9122143'
        ]);
    }
}
