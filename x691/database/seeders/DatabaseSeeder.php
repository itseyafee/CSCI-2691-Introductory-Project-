<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('accounts')->insert([
        'id' => '1',
        'project_id' => "N/A",
        'name' => 'john doe', 
        'email' => 'johndoe@email.com',
        'password' => bcrypt('password')
       ]);
    }
}
