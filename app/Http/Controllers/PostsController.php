<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    //
    function index(){

    }

    function add(Request $request){
        $post=new Post;
        $post->title=$request->title;
        $post->content=$request->pcontent;
        $post->save();
//        return view('post',['status'=>'Your post has been saved!']);
    }

    function new_post(){
        return view('post');
    }

    function edit(Request $request, $id){

    }

    function delete($id){

    }
}
