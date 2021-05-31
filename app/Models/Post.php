<?php

namespace App\Models;

use App\Models\Like;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    //likes relationship
    public function likes(){
        $this->hasMany(Like::class);
    }

    //Post to user relationship
    public function user(){
        $this->belongsTo(User::class);
    }
}
