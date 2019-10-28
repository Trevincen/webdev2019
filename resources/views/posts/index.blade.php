@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
	<h1>Blog Posts</h1>        	
	@if(count($post)>0)             
		@foreach ($post as $post)                
		<div class="card" style="width: 18rem;">
			<div class="card-body">
			  <h5 class="card-title">{{$post->title}} </h5>
			  <p class="card-text">{{$post->description}}</p>
			  <a href="#" class="btn btn-primary">Naice</a>
			</div>
		  </div>               
		@endforeach         
	@else             
		<h3>Tidak ada data.</h3>        
	@endif 
@endsection