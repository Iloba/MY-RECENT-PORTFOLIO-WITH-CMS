<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {

        $posts = Post::all();

        //return all posts
        return view('posts.index')->with(['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return Posts Page
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
            'title' => 'required',
            'image' => 'required | mimes:jpg',
            'about' => 'required'
        ]);

        //Upload Image

        //if an image is being uploaded
        if($request->hasFile('image')){
            


        //Get Original Name
        $originalName = $request->image->getClientOriginalName();


        //get Name ALone
        $filename = pathinfo($originalName, PATHINFO_FILENAME);


        //get Extension
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);

        $nameToStore = $request->title.'_project.'.$extension;


        //Store File
        $request->image->storeAs('images', $nameToStore, 'public');
            
        
        }




        //Store
        $post = new Post;
        $post->title = $request->title;
        $post->image = $nameToStore;
        $post->about = $request->about;

        $post->save();

        if($post->save()){
            return back()->with('status', 'Post Created Successfully');
        }else{
            return back()->with('status', 'Operation Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Show Individual post
        $post = Post::find($id);

        return view('posts.post-page')->with(['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $posts = Post::find($id);
        //edit posts page
        return view('posts.edit')->with(['post' => $posts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //validate
        $request->validate([
            'title' => 'required',
            'image' => 'required | mimes:jpeg,png',
            'about' => 'required'
        ]);

        //Upload Image

        //if an image is being uploaded
        if($request->hasFile('image')){
            


        //Get Original Name
        $originalName = $request->image->getClientOriginalName();


        //get Name ALone
        $filename = pathinfo($originalName, PATHINFO_FILENAME);


        //get Extension
        $extension = pathinfo($originalName, PATHINFO_EXTENSION);

        $nameToStore = $request->title.'_project.'.$extension;


        //Store File
        $request->image->storeAs('images', $nameToStore, 'public');
            
        
        }

        //Store
        $post->title = $request->title;
        $post->image = $nameToStore;
        $post->about = $request->about;

        $post->save();

        if($post->save()){
            return redirect(route('posts.index'))->with('status', 'Post Updated Successfully');
        }else{
            return back()->with('status', 'Operation Failed');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete
        $post = Post::find($id);

        $post->delete();

        return back()->with('status', 'Post Deleted Successfully');
    }

    public function welcome(){
        $posts = Post::all();

        return view('welcome')->with(['posts' => $posts]);
    }
}
