<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
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
          $post->comment()->create([
                'name' => $request->name,
                'comment' => $request->comment
          ]);

          //return redirect
          return redirect()->back()->with('status', 'Comment Successfully Submitted');
        }else{
            return redirect()->back()->with('error', 'No Such Post Found');
        }
    }

    //Get all comments on a particular post
    public function getComments(Post $post){
        if(Post::where('id', $post->id)){
            $comments = Post::Find($post->id)->comment()->paginate(5);
          
            return view('posts.post-page',[
                'comments' => $comments,
                'post' => $post
            ]);
        }
    }

    //Get Single Comment
    public function getSingleComment(Post $post, $id){
        if(Post::where('id', $post->id)->exists()){
            $comment = Post::find($post->id)->comment()->where('id', $id)->get();
            
            //Return back
            return view('comments.comment-page')->with(['comment' => $comment]);
        }
    }
}
