@extends('layouts.app')
@section('content')
@include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
            Create a New User
        </div>
        <div class="panel-body">
            <form action="{{route('user.store')}}" method="post">
                {{csrf_field()}}
                <div class="from-group">
                    <label for="name">User Name</label>
                    <input type="text"name="name" class="form-control">
                </div>
                <div class="from-group">
                    <label for="email">User Email</label>
                    <input type="email"name="email" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">Add user</button>
                </div>
            </form>
        </div>
    </div>

@stop