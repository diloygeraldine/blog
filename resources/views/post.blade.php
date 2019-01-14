@extends('index')
@section('content')


@if(isset($post))
<h1 class="text-danger">Update Post</h1>
    {{Form::model($post,['route'=>['post.update'],'method'=>'put'])}}
    <input type="hidden" name="id" value="{{$post->id}}">
@else
    <h1 class="text-danger">Create a New post</h1>
    {{Form::open(['route'=>'post.add', 'method'=>'post'])}}
@endif


<div class="form-group {{$errors->has('title')?' has-error':''}}">
    <label for="title">
        <!--            {{Form::text('title',null)}}-->
        <input type="text" name="title"
               class="form-control"
               value="{{old('title')}}"/>
    </label>
    <span class="text-danger">{{$errors->first('title')}}</span>
</div>

<div class="form-group {{$errors->has('content')?'has-error':''}}">
    <label for="content">
        {{Form::textarea('content',null, array('class'=>'form-control'))}}
    </label>
    <span>{{$errors->first('title')}}</span>
</div>
<div class="form-group">
    {{Form::submit('submit', array('class'=>'btn btn-lg btn-primary'))}}
    <input type=reset name="reset" value="Clear" class="btn btn-lg btn-warning"/>
</div>
{{Form::close()}}
@endsection