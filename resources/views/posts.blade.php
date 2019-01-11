@extends('index')
@section('content')
<div class="cols-md-7">


    <table class="table table-striped">
        <thead>
        <th>Post ID</th>
        <th>Post Title</th>
        <th>Post Created</th>
        <th>Post Updated</th>
        <th colspan="2">Action</th>
        </thead>
        <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->created_at}}</td>
            <td>{{$post->updated_at}}</td>
            <td><a class=" btn btn-warning"href="{{route('post.edit',$post->id)}}">Edit</a></td>
            <td><a class="btn btn-danger"href="{{route('post.delete',$post->id)}}">Delete</a></td>
        </tr>
        @endforeach
        </tbody>

    </table>
</div>
@endsection