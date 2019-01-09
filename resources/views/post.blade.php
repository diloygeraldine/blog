@extends('index')
@section('content')

<h1 class="text-danger">Create a New post</h1>
{{Form::open(['route'=>'post.add', 'method'=>'post'])}}
   <fieldset>
       {{Form::text('title')}}
   </fieldset>
   <fieldset>
       {{Form::textarea('pcontent')}}
   </fieldset>
   <fieldset>
       {{Form::submit('submit', array('class'=>'btn btn-lg btn-primary'))}}
       <input type=reset name="reset" value="Clear" class="btn btn-lg btn-warning"/>
   </fieldset>
{{Form::close()}}
@endsection