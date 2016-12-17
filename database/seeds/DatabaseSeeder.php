<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		User::insert([
            'first_name'     => 'Admin',
            'last_name'     => 'Admin',
			'email'    => 'Admin@gmail.com',
			'isAdmin'  => '1',
			'password' => bcrypt('123456')
		]);
    }
}
