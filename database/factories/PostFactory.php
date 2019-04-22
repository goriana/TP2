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

use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function ( Faker $faker){
    //    $users = App\User::all()->randomElement()->id;
      $users = App\User::pluck('id')->toArray();
      $now = Carbon\Carbon::now();
    return [
        'post_author' => $faker->randomElement($users),
        'post_date' => $now,
        'post_content' => $faker->paragraph(),
        'post_title' => $faker->sentence(),
        'post_name' => $faker->word(),
        'post_type' => 'article',
    ];
});