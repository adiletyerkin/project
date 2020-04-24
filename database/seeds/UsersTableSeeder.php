<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB:: table('users')->insert([
            'role_id' => '1',
            'name' => 'Admin',
            // 'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$A2Pdq9IvGTdbuj4MtKHttebE0RcY/63HgP0uxbtQGsJjbnFZoyWqe',

        ]);

         DB:: table('users')->insert([
        	'role_id' => '2',
        	'name' => 'Author',
        	// 'username' => 'Author',
        	'email' => 'author@gmail.com',
        	'password' => '$2y$10$A2Pdq9IvGTdbuj4MtKHttebE0RcY/63HgP0uxbtQGsJjbnFZoyWqe',
        ]);
    }
}
