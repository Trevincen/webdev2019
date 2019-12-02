@extends('layouts.app')
@section('content')
  		


<div class="row">
	@if(count($posts)>0)             
		@foreach ($posts as $post)    
		<div class="col-sm-3">          
			<div class="card" style="width: 11rem; height: 25rem; margin:10px">
				<div class="card-body">
					<h5 class="card-title">{{$post->title}} </h5>
					<p class="card-text">{!!$post->description!!}</p>
					<p class="card-text">{{$post->Price}}</p>
					<p class="card-text"><img src="{{asset('/storage/foto/' . $post->Picture) }}" style="width:100px; height:100px;"  /></p>
					<div class="text-center">
					<a href="/post/{{$post->id}}/edit" class="btn btn-primary btn-block">Edit</a>
					{!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'DELETE', 'style' => 'display::inline'])!!}
					{{Form::submit('DELETE', ['class'=>'btn btn-danger btn-block'])}}
					{!! Form::close()!!}
				</div>
				</div>
		  	</div>        
		</div>       
		@endforeach      
	@else             
		<h3>Tidak ada data.</h3>        
	@endif 
</div>
{{ $posts->links() }}  

				
	
@endsection