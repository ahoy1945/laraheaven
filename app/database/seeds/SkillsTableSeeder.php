<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SkillsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('skills')->delete();
		$record = [
			[
				'id' => 1,
				'name' => 'Web Developer',
				'created_at' => '2014-09-19 13:12:46',
				'updated_at' => '2014-09-19 13:12:46'
			],
			[
				'id' => 2,
				'name' => 'Desktop Developer',
				'created_at' => '2014-09-19 13:12:46',
				'updated_at' => '2014-09-19 13:12:46'
			],
			[
				'id' => 3,
				'name' => 'Android Developer',
				'created_at' => '2014-09-19 13:12:46',
				'updated_at' => '2014-09-19 13:12:46'
			],
			[
				'id' => 4,
				'name' => 'UI Designer',
				'created_at' => '2014-09-19 13:12:46',
				'updated_at' => '2014-09-19 13:12:46'
			]
		];

		DB::table('skills')->insert($record);
	}

}