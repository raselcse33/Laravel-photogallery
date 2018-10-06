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
        App\User::create([

        	'name'=>'Rasel',
        	'email'=>'admin@gmail.com',
        	'role'=>1,
        	 'password'=>bcrypt('admin')

        ]);
    }
}
