<?php
class UserTableSeeder extends  Seeder{
	public function run(){
		DB::table('users')->delete();
		User::create(array(
			'name' => 'Majid',
			'username' => 'mj',
			'email' => 'majid@mha.com',
			'password' => Hash::make('Majid')
		));
		
		User::create(array(
			'name' => 'Mohsen',
			'username' => 'mh',
			'email' => 'mohsen@mha.com',
			'password' => Hash::make('Mohsen')
		));
	}
}