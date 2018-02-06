<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => 'Ivan',
        	'surname' => 'Ivanov',
        	'salary' => '10',
        ]);
        DB::table('users')->insert([
        	'name' => 'Vasiliy',
        	'surname' => 'Petrov',
        	'salary' => '12',
        ]);
    }
}
