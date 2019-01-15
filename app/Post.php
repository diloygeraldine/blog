<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use App\User;
use App\Comment;
class Post extends Model
{
    //@optional
    protected $table="post";
    protected $fillable=['user_id','title','content'];

    function user(){
        return $this->belongsTo('App\user');
    }

    public function comment(){
        return $this->hasMany(Comment::class);
    }

    function getTitleAttribute($value){
        //mutate our post title first letter
        return ucfirst($value);
    }

    function setTitleAttribute($value){
        //convert title to lowercase
        return $this->attributes['title']=strtolower($value);
    }

    function getCreatedAtAttribute($value){
        $date_now=Carbon::now();
        return $date_now->diffForHumans($value);
    }

    function getUpdatedAtAttribute($value){
        $date_now=Carbon::now();
        return $date_now->diffForHumans($value);
    }

}
