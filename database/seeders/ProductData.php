<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'productname' => 'Chair',
            'price' => '100',
            'size' => '10',
            'color' => 'red',
            'images' => 'f3.png',
            'category_id' => '1',
            'description' => 'This is a chair'
        ]);
    }
}
