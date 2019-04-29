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
    		<ul class="list-group">
            
            @foreach ($post-> comments as $comment)
    		
            <li class="list-group-item"> 
    		
    			{{ $comment->body}}
    		</li>
           
          @endforeach  
         </ul>
    </div>
    @endsection
</body>
</html>