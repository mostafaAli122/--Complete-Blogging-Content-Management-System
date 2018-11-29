@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                  @foreach($posts as $post)
                    <td><img src="{{$post->featured}}" alt="{{$post->title}}"></td>
                    <td>{{$post->title}}</td>
                    <td>Edit</td>
                    <td><a href="{{route('post.delete')}}" class="btn btn-danger">Trash</a></td>
                  @endforeach
                </tbody>
            </table>
        </div> 
    </div>
@stop