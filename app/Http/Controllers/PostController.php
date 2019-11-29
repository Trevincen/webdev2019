<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()    {        
        $data = array(            
            'id' => "posts",            
            'posts' => Post::paginate(2)        
            );        
        return view('posts.index')->with($data);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('makanan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function store(Request $request)
    {
	    $this->validate($request, [
		    'title' => 'required',
            'description' => 'required',
            'Price' => 'required',
            'Picture' =>'Picture|nullable|max:1999'
<<<<<<< HEAD
            
=======
>>>>>>> 3e84a70fb42c9667f8147a7753cc19573b27f945
        ]);
        
        $data = new Post();
        $data->title = $request->input('title');
        $data->description = $request->input('description');
        $data->Price = $request->input('Price');
        
        
        if($request->hasFile('Picture')){
            $filenameWithExt = $request->file('Picture')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('Picture')->getClientOriginalExtension();
            $filenameSimpan = $filename.'_'.time().'.'.$extension;
            $path = $request->file('Picture')->storeAs('public/foto' , $filenameSimpan);
            $data ->Picture = $request -> input('Picture');
        }else{
             $filenameSimpan = $data ->Picture;
        }
        
       $data ->Picture =$filenameSimpan;
       $data -> save();   

       return redirect('/data')->with('success' , 'Data telah disimpan');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = array(            
            'id' => "posts",            
            'posts' => Post::find($id)        
            );        
        return view('posts.edit')->with($data);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $edit = post::find($id);
        $edit->title = $request->input('title');
        $edit->description = $request->input('description');
        $edit->Price = $request->input('Price');
        $edit->save();
        

        return redirect('/post')->with('success', 'Data Makanan telah diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Post::find($id)->delete();
        return redirect('/post')->with('success', 'Data Makanan telah dihapus');
    }
}
