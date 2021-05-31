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


        // dd($post->likes());
        //Create Post
        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);

        //Return back
        return back();
    }
}
