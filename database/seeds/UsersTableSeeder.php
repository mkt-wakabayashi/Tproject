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
            'username' => 'test1',
            'email' => 'test1@test.com',
            'password' => bcrypt('test1') 
        ]);
    }
}
