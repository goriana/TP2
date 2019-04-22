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

$factory->define(App\Post::class, function ( Faker $faker){
    //    $users = App\User::all()->randomElement()->id;
        $dateTime = Carbon\Carbon::now();
        $status = 'published';
        $type = 'article';
        return[ 
        'post_autor' => factory(App\User::class),
        'post_date' => $dateTime,
        'post_content' => $faker->paragraph(rand(2,10),true),
        'post_title' => $faker->sentence(),
        'post_status' => $faker->randomElement($status),
        'post_name' => $faker->word(),
        'post_type' => $faker->randomElement($type),
        'post_category' => $faker->randomElement(['Economics', 'Politics', 'Healthcare', 'Sports']),
        ];
});