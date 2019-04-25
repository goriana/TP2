<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Mi blog | Inicio</title>
<link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
</head>
<div class="callout large primary">
<div class="row column text-center">
<h1>Mi blog</h1>
<h2 class="subheader"></h2>
</div>
</div>
<body>

<div class="top-bar">
<div class="top-bar-left">
<ul class="menu">
<li><a href="Home">Home</a></li>
<li><a href="Articles">Article</a></li>
<li><a href="Contact">Contact</a></li>
</ul>
</div>
</div>

<div class="row medium-8 large-7 columns">
@yield('content')
<ul class="post">
<ul>
	@foreach ( $posts as $post )
  	<li>{{ $post->post_title }}</li>
	@endforeach
</body>
</html>
