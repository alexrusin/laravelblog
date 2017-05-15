<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('password'),
        'remember_token' => str_random(10),
    ];
});

// $factory->define(App\Post::class, function (Faker\Generator $faker) {
    

//     return [        
//         'user_id' => $faker->numberBetween(1,6),
//         'title' =>  $faker->sentence(),
//         'body' => $faker->text($maxNbChars = 200), 
//         "created_at" =>	$faker->dateTimeBetween('2012-01-01 01:01:01', 'now'),    
        
//     ];
// });

$factory->define(App\Post::class, function (Faker\Generator $faker) {
  
    return [        
        'user_id' => function() {
                return factory(App\User::class)->create()->id;
        },
        'title' =>  $faker->sentence,
        'body' => $faker->paragraph, 
        // "created_at" => $faker->dateTimeBetween('2012-01-01 01:01:01', 'now'),    
        
    ];
});
