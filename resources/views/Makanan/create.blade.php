@extends('layouts.app')

@section('content')
<<<<<<< HEAD

{!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
=======
{!! Form::open(['action' => 'PostController@store', 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
>>>>>>> 3e84a70fb42c9667f8147a7753cc19573b27f945
<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '', 
        ['class' => 'form-control', 
        'placeholder' => 'Title'])}}
</div> 

<div class="form-group">
    {{Form::label('description', 'description')}}
    {{Form::textarea('description', '', 
        ['class' => 'form-control', 
        'placeholder' => 'Description'])}}
</div> 

<div class="form-group">
	{{Form::file('Picture')}}
</div>

<div class="form-group">
        {{Form::label('Price', 'Price')}}
        {{Form::text('Price', '', 
            ['class' => 'form-control', 
            'placeholder' => 'Price'])}}
    </div> 
{{Form::submit('Simpan', ['class'=>'btn btn-primary'])}}
{!! Form::close() !!}
@endsection 