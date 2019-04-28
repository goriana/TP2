<!DOCTYPE html>
@extends('layouts/main')
<html>
<head>
    <title></title>

</head>
<body>
    @section('menu')
    <li class="menu-text">Home</li>
    <li><a href="Articles">Articles</a></li>
    <li><a href="Contact">Contact</a></li>
    @endsection

    @section('content')  
    <ul>
    @foreach ( $posts as $post )

    <li><a href="/Articles/{{ $post->id }}">
        {{ $post->post_title }}
    </a>
    </li>
    @endforeach   
    @endsection
  
</ul>
</body>
</html>