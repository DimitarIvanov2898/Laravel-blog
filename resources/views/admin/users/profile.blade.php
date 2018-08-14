@extends('layouts.app')

@section('content')
    @if(count($errors) > 0)
        <ul class="list-group">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif
    <div class="panel panel-default">
        <div class="panel-heading">
            Edit your profile
        </div>

        <div class="panel-body">
            <div class="panel-body">
                <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Username</label>
                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Email</label>
                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                        <label for="title">New Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Avatar</label>
                        <input type="file" name="avatar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Facebook</label>
                        <input type="text" name="facebook" class="form-control" value="{{$user->profile->facebook}}">
                    </div>
                    <div class="form-group">
                        <label for="title">Youtube</label>
                        <input type="text" name="youtube" class="form-control" value="{{$user->profile->youtube}}">
                    </div>
                    <div class="form-group">
                        <label for="title">About you</label>
                        <textarea name="about" id="about" class="form-control" rows="5" cols="5">{{$user->profile->about}}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop