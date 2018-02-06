<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
        	"name" => "First task",
        	"start_date" => '2018-01-06',
        	"finish_date" => '2018-02-06',
        ]);
        DB::table('tasks')->insert([
        	"name" => "Second task",
        	"start_date" => '2017-12-10',
        	"finish_date" => '2018-01-01',
        ]);
    }
}
