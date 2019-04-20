<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /*{ DB::table('contact')->insert([
           'id'->Int::random,
           'contact_name'->Str::random;,
           'contact_email'->Str::random(10).'@gmail.com',
           'contact_message'->Str::random,
           'contact_date'->timestamp::random,
        */
          factory(App\Contact::class, 20)->create();

         ])}
    }
}
