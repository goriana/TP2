<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function(Blueprint $table){
           $table->bigInteger('id', TRUE)->unsigned();
           $table->unsignedInteger('post_autor');
           $table->timestamp('post_date')->default(DB::raw('CURRENT_TIMESTAMP'));
           $table->text('post_content');
           $table->text('post_title');
           $table->string('post_status',20)->default('published');
           $table->string('post_name',200)->default('');
           $table->string('post_type',20)->default('article');
           $table->text('post_category')->nullable();        
           $table->foreign('post_autor')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::dropIfExists('posts');
         Schema::table('posts',function (Blueprint $table) {
          $table->dropForeign('post_autor');
          $table->dropColumn('id');

})
    }
}
