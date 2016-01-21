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
        //
        DB::table('users')->insert([
            'first_name' => str_random(10),
            'last_name' => str_random(10),
            'user_level' =>'administrator',
            'username' => 'admin',
            'email' => 'chriss.innocent@gmail.com',
            'password' => bcrypt('admin'),
        ]);
    }
}
