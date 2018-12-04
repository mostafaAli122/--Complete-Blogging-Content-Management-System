@extends('layouts.app')

@section('content')
    <div class="col-lg-8">
        <div class="panel panel-info">
            <div class="panel-heading text-center">Posts</div>
            <div class="panel-body">
            <h1 class="text-cente">{{$posts_count}}</h1>
            </div>
        </div>
        <div class="panel panel-danger">
            <div class="panel-heading text-center">Trashed Posts</div>
            <div class="panel-body">
            <h1 class="text-cente">{{$trashed_count}}</h1>
            </div>
        </div><div class="panel panel-success">
            <div class="panel-heading text-center">Users</div>
            <div class="panel-body">
            <h1 class="text-cente">{{$users_count}}</h1>
            </div>
            <div class="panel panel-info">
            <div class="panel-heading text-center"> Categories</div>
            <div class="panel-body">
            <h1 class="text-cente">{{$categories_count}}</h1>
            </div>
        </div>
        </div>
       
    </div>

@endsection
