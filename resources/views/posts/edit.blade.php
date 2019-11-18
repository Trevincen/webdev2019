@extends('layouts.app')
@section('content')
<div class="container"> 
    <div class="row">        
      <div class="col-10">        
        <h1 class="mt-3">Form Ubah Data</h1>        
        <form method="post" action="/post/{{$posts->id}}">        
          @method('patch')        
          @csrf         
          <div class="form-group">            
            <label for="title">Title</label>            
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"             
            placeholder="Masukkan Title" name="title" value="{{$posts->title}}" >             
            @error('nama')<div class="invalid-feedback">{{$message}}</div>@enderror  
          </div>  
          <div class="form-group">            
              <label for="description">Description</label>            
              <input type="text" class="form-control @error('description') is-invalid @enderror" id="description"             
              placeholder="Masukkan description" name="description" value="{{$posts->description}}">             
              @error('description')<div class="invalid-feedback">{{$message}}</div>@enderror  
          </div>  
          <div class="form-group">            
                <label for="Price">Price</label>            
                <input type="text" class="form-control" id="Price"             
                placeholder="Masukkan Price" name="Price" value="{{$posts->Price}}">  
              </div>  
              <button type="submit" class="btn btn-primary">Ubah Data</button></form>        
          </div>    
          </div></div>
          
@endsection