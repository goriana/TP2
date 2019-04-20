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

$factory->define(App\Posts::class, function (
Faker $faker){
	$users = App\User::pluck('id')->toArray();
        return[
        'post_autor'=>$faker->randomElement($users),
        'post_date'=>$faker->now();
        'post_content'=>$faker->paragraph(rand(2,10),true);
        'post_title'=>$faker->sentence();
        'post_name'=>$faker->word();
        'post_type'=>$faker->'article';
        ])];
});