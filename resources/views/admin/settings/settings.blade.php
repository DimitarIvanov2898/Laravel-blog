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
            Edit blog settings
        </div>

        <div class="panel-body">
            <div class="panel-body">
                <form action="{{ route('settings.update') }}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="title">Site name</label>
                        <input type="text" name="site_name" value="{{$settings->site_name}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Contact Email</label>
                        <input type="text" name="contact_email" value="{{$settings->contact_email}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Contact Number</label>
                        <input type="text" name="contact_number" value="{{$settings->contact_number}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="title">Address</label>
                        <input type="text" name="address" value="{{$settings->address}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <button class="btn btn-success" type="submit">
                                Edit Settings
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop