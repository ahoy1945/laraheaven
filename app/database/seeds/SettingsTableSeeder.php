<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SettingsTableSeeder extends Seeder {

	public function run()
	{
		DB::table('settings')->delete();

		$record = [
			[
				'id' => '1',
				'website_title' => 'HeavenTech',
				'website_description' => '',
				'website_metakeyword' =>'',
				'website_email' =>'',
				'facebook' => 'https://www.facebook.com/pages/Heaven-Tech/1639277706297947',
				'twitter' => 'https://twitter.com/Heaven_Techno'
			]
			];
			 

		DB::table('settings')->insert($record);
	}

}