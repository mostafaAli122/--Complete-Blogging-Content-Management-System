@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Restore</th>
                    <th>Destroy</th>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                    <td><img src="{{$post->featured}}" alt="{{$post->title}}"></td>
                    <td>{{$post->title}}</td>
                    <td>Edit</td>
                    <td><a href="{{route('posts.restore',['id'=>$post->id])}}" class="btn btn-xs btn-success">Restore</a></td>
                    <td><a href="{{route('posts.kill',['id'=>$post->id])}}" class="btn btn-xs btn-danger">Delete</a></td>
                  @endforeach
                </tbody>
            </table>
        </div> 
    </div>
@stop