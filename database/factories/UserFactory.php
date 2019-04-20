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

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
	static $password;
	$dateTime = Carbon\Carbon::now();
    return [
    	'id' => rand(1,50),
        'user_login' => $faker->name,
        'password' => $password ?: $password= bcrypt('secret'), // secret
        'updated_at' => $dateTime,
    ];
});