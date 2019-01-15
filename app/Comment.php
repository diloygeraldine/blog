<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;
use App\User;
class Comment extends Model
{
   protected $fillable=['text','id','post_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function user(){
        return $this->belongsTo(Post::class);
    }
}
