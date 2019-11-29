@extends('layouts.app')

@section('content')

{!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
<div class="form-group">
    {{Form::label('title', 'Title')}}
    {{Form::text('title', '', 
        ['class' => 'form-control', 
        'placeholder' => 'Title'])}}
</div> 
<div class="form-group">
		{{Form::label('description', 'Description')}}
		{{Form::textarea('description', '', 
			['class' => 'ckeditor', 
			'placeholder' => 'Description'])}}
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