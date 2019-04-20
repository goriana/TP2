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
        factory(App\User::class, 19)->create();

        App\User::create([
            'id' =>1,
            'user_login' => 'Oriana91',
            'password' => bcrypt('123'),
            'updated_at' => now(),
    ]);
    }
}
