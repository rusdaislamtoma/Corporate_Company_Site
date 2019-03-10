<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            'name' =>'Rusda Islam Toma',
            'slug_name' =>'rusda-islam-toma',
            'contactNo'=>'01766789890',
            'address'=>'Uttara,Dhaka',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin123'),
            'status' =>'Active'

        ]);
    }
}
