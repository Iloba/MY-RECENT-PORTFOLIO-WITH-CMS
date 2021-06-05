<?php

namespace App\Models;

use App\Models\Like;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    //likes relationship
    public function likes(){
       return $this->hasMany(Like::class);
    }

    //Post to user relationship
    public function user(){
       return $this->belongsTo(User::class);
    }

    //Check if user has already liked Post
    public function likedBy(User $user){
      return $this->likes->contains('user_id', $user->id);
    }

    //Comment relationship
    public function comment(){
       return $this->hasMany(Comment::class);
    }
}
