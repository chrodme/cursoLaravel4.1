<?php

// Composer: "fzaninotto/faker": "v1.3.0"
//use Faker\Factory as Faker;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		Category::create([
			'id'		=> 1,
			'name'		=> 'Backend developers',
			'slug'		=> 'Backend-developers'
		]);

		Category::create([
		'id'		=> 2,
		'name'		=> 'Fronten developers',
		'slug'		=> 'Fronten-developers'
		]);

		Category::create([
		'id'		=> 3,
		'name'		=> 'Designer',
		'slug'		=> 'Designer'
]		);
	}

}