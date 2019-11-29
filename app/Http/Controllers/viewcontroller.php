<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class viewcontroller extends Controller
{
    public function index()    {        
        $data = array(            
            'id' => "posts",            
            'posts' => Post::all()        
            );        
        return view('product')->with($data);    
    }
}
