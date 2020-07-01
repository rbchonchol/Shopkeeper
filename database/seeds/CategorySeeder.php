<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name'=> 'T-shirt',
        ]);
        DB::table('categories')->insert([
            'name'=> 'Shirt',
        ]);
        DB::table('categories')->insert([
            'name'=> 'Mobile',
        ]);
        DB::table('categories')->insert([
            'name'=> 'Laptop',
        ]);
    }
}
