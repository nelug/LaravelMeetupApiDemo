<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('PostsTableSeeder');
		$this->call('AuthorsTableSeeder');
		$this->call('CommentsTableSeeder');
		$this->call('UsersTableSeeder');
		
	}

}
