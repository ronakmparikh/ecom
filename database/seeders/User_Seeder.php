<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // this one you have to definne
use Illuminate\Support\Facades\Hash;//this one you have to definne
class User_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {//below insert query for direct send information through data
        DB::table('users')->insert([
            'name'=>'priyesh',
            'email'=>'priyesh@gmail.com',
            'password'=>Hash::make('12345')

        ]);
    }
}
