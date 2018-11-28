@extends('layouts.app')
@section('content')

    @if(count($errors)>0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">{{$error}}</li>
            @endforeach
        </ul>

    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            Create a New Category
        </div>
        <div class="panel-body">
            <form action="{{route('category.store')}}" method="post">
                {{csrf_field()}}
                <div class="from-group">
                    <label for="name">Name</label>
                    <input type="text"name="name" class="form-control">
                </div>
                <div class="form-group text-center">
                    <button class="btn btn-success" type="submit">Store Category</button>
                </div>
            </form>
        </div>
    </div>

@stop