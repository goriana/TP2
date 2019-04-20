<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*  DB::table('posts')->insert([
        	'id'->bigInteger::random;
           'post_autor'->unsignedInteger::random;
           'post_date'->timestamp::random;
           'post_content'->text::random;
           'post_title'->text::random;
           'post_status'->Str::random;
           'post_name'->Str::random;
           'post_type'->Str::random;
           'post_category'->text::random;
          */
      factory(App\Post::class, 20)->create();
    }
}
