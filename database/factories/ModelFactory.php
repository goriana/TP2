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

$factory->define(App\Post::class, function (
Faker $faker){
	$users = App\User::pluck('id')->toArray();
        $dateTime = Carbon\Carbon::now();
        $status = 'published';
        $type = 'article';
        return[  
        'post_autor' => $faker->randomElement($users),
        'post_date' => $dateTime,
        'post_content' => $faker->paragraph(rand(2,10),true),
        'post_title' => $faker->sentence(),
        'post_status' => $faker->randomElement($status),
        'post_name' => $faker->word(),
        'post_type' => $faker->randomElement($type),
        'post_category' => $faker->randomElement(['Economics', 'Politics', 'Healthcare', 'Sports']),
        ];
});

$factory->define(App\User::class, function (Faker $faker) {
	static $password;
    $dateTime = Carbon\Carbon::now();
    return [
    	'id' => rand(1,30),
        'user_login' => $faker->name,
        'password' => $password ?: $password= bcrypt('secret'),
        'updated_at' => $dateTime,
        // secret
    ];
});