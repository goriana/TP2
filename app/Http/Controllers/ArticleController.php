<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class ArticleController extends Controller
{

   public function articles(){
   	
   	$posts = \App\Post::latest()->get(); //get all posts
	   return view('articles',array(
           'posts' => $posts
       ));
}	


	public function show($id) {
   $post = \App\Post::where('id',$id)->first(); //get first post with post_nam == $post_name

   return view('single',array( //Pass the post to the view
       'post' => $post
   ));
}
}


?>