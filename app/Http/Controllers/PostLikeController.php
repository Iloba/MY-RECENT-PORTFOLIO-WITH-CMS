<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{

    //Middleware
    public function __construct(){
        $this->middleware(['auth']);
    }


 

    //Store like
    public function store(Request $request,  Post $post){
        // dd($post);
   //User can only like Post Once
   if($post->likedBy($request->user())){
       return response(null, 409); //conflict HTTP
   }

        // dd($post->likes());
        //Create Post
        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        //Return back
        return back()->with('status', 'Operation Successful');
    }

    //Unlike Post
    public function destroy(Request $request, Post $post){
       
        //delete Like
        $request->user()->likes()->where('post_id', $post->id)->delete();

        return back()->with('status', 'Operation Successful');
    }
}
