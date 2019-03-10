<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('company_settings')->insert([

            'name' =>'Mentos',
            'slug_name' =>'mentos',
            'logo'=>'assets/ac.jpg',
            'achievement'=>'This is.............',
            'description'=>'This is.................',

        ]);
    }
}
