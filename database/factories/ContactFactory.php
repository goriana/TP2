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

$factory->define(App\Contact::class, function (
Faker $faker){
	return[
        'id'=>$faker->bigInteger(),
        'contact_name'=>$faker->Str(),
        'contact_email'=>$faker->Str().'@gmail.com',
        'contact_message'=>$faker->Str(),
        'contact_date'=>$faker->timestamp(),
   ];
});