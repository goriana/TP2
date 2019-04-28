<!DOCTYPE html>
@extends('layouts/main')
<html>
<head>
    
</head>
<body>

	@section('content')
    <div class="blog-post">
    <h3>{{ $post->post_title}}
    	<hr>
        <small>{{ $post->created_at->toFormattedDateString()}}</small></h3>
    <img class="thumbnail" src="https://placehold.it/850x350">    
    <p>{{ $post->post_content }}</p>
    <li><a href="#">{{ $post->post_author}}</a></li>   
    <hr>
    <div class="comments">
    		@foreach ($post-> comments as $comment)
    		<article>
    			
    			{{ $comment -> post_content}}
    		</article>
          @endforeach  
    </div>
    @endsection
</body>
</html>