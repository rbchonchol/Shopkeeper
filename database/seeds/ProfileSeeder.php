<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'bio'=> 'i am a good person ',
            'web'=> 'rongon.com',
            'facebook'=>'https://www.facebook.com/RBChonchol/',
            'twitter'=>'https://www.facebook.com/RBChonchol/',
            'github'=>'https://www.github.com/rbchonchol/',
        ]);
    }
}
