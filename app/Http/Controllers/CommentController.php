<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    //Submit Comment
    public function submitComment(Request $request, Post $post){
        
        //Validate Form
        $request->validate([
            'name' => 'required',
            'comment' => 'required'
        ]);

        //Submit Comment
        if(Post::where('id', $post->id)->exists()){
            return 'hello';
        }else{
            return 'nooo';
        }
    }
}
