@extends('layouts.app')
@section('content')
@include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">
           Edit Your Profile
        </div>
        <div class="panel-body">
            <form action="{{route('user.profile.update')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="from-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" value="{{$user->name}}" class="form-control">
                </div>
                <div class="from-group">
                    <label for="email">User Email</label>
                    <input type="email"name="email" value="{{$user->email}}" class="form-control">
                </div>
                <div class="from-group">
                    <label for="password">New Password</label>
                    <input type="password"name="password" class="form-control">
                </div>
                <div class="from-group">
                    <label for="image">Upload Profile Image</label>
                    <input type="file"name="image" class="form-control">
                </div>
                <div class="from-group">
                    <label for="about">About You</label>
                    <textarea name="about" id="about" cols="6" rows="6">value="{{$user->profile->about}}"</textarea>
                </div>
                <div class="from-group">
                    <label for="facebook">Facebook Profile</label>
                    <input type="text"name="facebook" value="{{$user->profile->facebook}}" class="form-control">
                </div>
                <div class="from-group">
                    <label for="youtube">Youtube Profile</label>
                    <input type="text"name="youtube" value="{{$user->profile->youtube}}" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">Update Profile</button>
                </div>
            </form>
        </div>
    </div>

@stop