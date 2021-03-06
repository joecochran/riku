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

		$this->call('UsersTableSeeder');
		$this->call('PagesTableSeeder');
		$this->call('SettingsTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('TagsTableSeeder');
		$this->call('PostsTagsTableSeeder');
	}

}
