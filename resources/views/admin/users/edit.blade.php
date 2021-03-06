@extends('layouts.admin')
@section('content')
    <h1>Edit Users</h1>

    <div class="col-sm-3">
        <img src="/images/{{$user->photo?$user->photo->name :'/images/dz.jpg' }}" class="img-responsive">

    </div>
    <div class="col-sm-9">

        {{Form::model($user,['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true])}}
        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role_id', 'Role') !!}
            {!! Form::select('role_id',[''=>'Chose an option']+$roles, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_active', 'status') !!}
            {!! Form::select('is_active', array(1=>'Active', 0=>'Not active'),0, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('photo_id', 'Profile Picture') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Edit User', ['class'=>'btn btn-primary pull-left']) !!}
        </div>

        {!! Form::close() !!}
        {{Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]])}}

        <div class="form-group">
            {!! Form::submit('Delete User', ['class'=>'btn btn-danger  pull-right']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    @include('includes/form_error')
@endsection