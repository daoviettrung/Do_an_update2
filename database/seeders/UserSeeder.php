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
        DB::table('users')->insert(['id'=>'123','name'=>'trung1','email'=>'trung@gmail.com','gender'=>'male','level'=>0,'password' => Hash::make(123)]);
        DB::table('users')->insert(['id'=>'1234','name'=>'trung2','email'=>'trung111@gmail.com','gender'=>'male','level'=>0,'password' => Hash::make(123)]);
        DB::table('users')->insert(['id'=>'12345','name'=>'trung3','email'=>'trung222@gmail.com','gender'=>'male','level'=>0,'password' => Hash::make(123)]);
    }
}
