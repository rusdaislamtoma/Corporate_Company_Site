<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('contacts')->insert([

            'address' =>'Uttara',
            'contactNo' =>'+8801766567897',
            'email'=>'mentos@gmail.com',
            'details'=>'This is.............',

        ]);
    }
}
