<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // this one you have to definne
use Illuminate\Support\Facades\Hash;//this one you have to definne

class Product_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'LG Mobile',
            'price'=>'800',
            'category'=>'Mobile',
            'gallery' =>'https://images.app.goo.gl/xYmhtJoytVWCYUgeA',
            'description'=>'Smart phone with 8gb with much more feature'
            ],
            [
                'name'=>'Motorola Mobile',
                'price'=>'500',
                'category'=>'Mobile',
                'gallery' =>'https://images.app.goo.gl/xYmhtJoytVWCYUgeA',
                'description'=>'Smart phone with 4gb with much more '
            ],

            [
                    'name'=>'Samsung Mobile',
                    'price'=>'1000',
                    'category'=>'Mobile',
                    'gallery' =>'https://images.app.goo.gl/xYmhtJoytVWCYUgeA',
                    'description'=>'Smart phone with 8gb with many feature'
            ]

        ]);
    }
}
