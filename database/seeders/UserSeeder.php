<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
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
        DB::table('users')->insert(['id'=>'T-4','name'=>'trungzzz','email'=>'trung2020@gmail.com','gender'=>'male','level'=>1,'password' => Hash::make(123456)]);

    }
}
