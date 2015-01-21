<?php

 

class SentryTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();
		DB::table('users_groups')->delete();
		DB::table('throttle')->delete();
		DB::table('groups')->delete();

		 try
        {
            // Membuat grup admin
            $group = Sentry::createGroup(array(
                'name'        => 'admin',
                'permissions' => array(
                    'admin' => 1,
                ),
            ));
            // Membuat grup regular
            $group = Sentry::createGroup(array(
                'name'        => 'member',
                'permissions' => array(
                    'member' => 1,
                ),
            ));
        }
        catch (Cartalyst\Sentry\Groups\NameRequiredException $e)
        {
            echo 'Name field is required';
        }
        catch (Cartalyst\Sentry\Groups\GroupExistsException $e)
        {
            echo 'Group already exists';
        }

	}

}