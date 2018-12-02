@extends('layouts.app')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Users
        </div>
        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Permissions</th>
                    <th>Delete</th>
                </thead>
                <tbody>
                    @if($users->count()>0)               
                        @foreach($users as $user)
                        <tr>
                            <td> <img src="{{asset($user->profile->image)}}" alt="" width="60px" height="60px" style="border-radius:50%"></td>
                            <td>{{$user->name}}</td>
                            <td>Permissions</td>
                            <td>Delete</td>
                        </tr>
                        @endforeach
                    @else
                        <th colspan="5" class="text-center">No Users !!</th>
                    @endif
                </tbody>
            </table>
        </div> 
    </div>
@stop