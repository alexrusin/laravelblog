<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = factory(App\User::class)->create([
		    'name' => 'Alex',
		    'email' => 'alex@alex.com',
		   		    
		]);

		factory(App\User::class, 5)->create();

		
    }
}
