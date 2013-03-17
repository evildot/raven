<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$users = array(
			'username' => 'valfreixo@gmail.com',
			'password' => Hash::make('topmxg.0'),
		);

		DB::table('users')->insert($users);
	}

}
