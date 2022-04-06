<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'username' => 'admin',
            'user_fullname' => 'Admin',
            'user_email' => 'admin@domain.com',
            'user_phonenumber' => '08123456789',
            'password' => Hash::make('admin'),
            'user_gender' => 'Male',
            'user_role' => 'admin'
        ]);
    }
}
