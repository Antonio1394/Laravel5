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
    	 factory(App\User::class)->create([
        	'name' => 'Antonio',
        	'email' => 'admin@gmail.com',
        	'role' => 'admin',
        	'password' => 'admin'
        	]);
        factory(App\User::class, 49)->create();
       
    }
}
