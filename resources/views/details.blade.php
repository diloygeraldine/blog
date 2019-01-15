@extends('index')

@section('content')

    @if(post)
        <article>
            <h3 class="text-succes text-capitalize">{{$post->title}}</h3>
            By:: <a href="#{{$post->user->name}}">
                {{$post->user->name}}
            </a><br>
            <p>
                {{$post->content}}
            </p>
        </article>
        @foreach($post->comments as $comment)
            <div class="section">
                <blockqoute>{{$comment->user->name}}</blockqoute>
                <p>{{$comment->text}}</p>
                <span class="badge">{{$comment->created_at}}</span>
           </div>
        @endforeach
        <form class="form" action="{{ruote('/post/comment',['user_id'=>'Auth::user()->id','post_id'])}}">
            @csrf
            <textarea name="text" multiline required>

            </textarea><br>
            <input id="submit" type="submit" class="btn btn-secondary" value="comment"/>
        </form>
    @endif
@endsection


