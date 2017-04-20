@extends('layouts.admin')
@section('content')
    <h1>Edit Posts</h1>

    <div class="col-sm-3">
        <img src="/images/{{$post->photo?$post->photo->name :'/images/dz.jpg' }}" class="img-responsive">

    </div>
    <div class="col-sm-9">

        {{Form::model($post,['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true])}}
        <div class="form-group">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class'=>'form-control']) !!}

        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category') !!}
            {!! Form::select('category_id',[''=>'Chose a Category']+$categories, null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('photo_id', 'Profile Picture') !!}
            {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('body', 'Description') !!}
            {!! Form::textarea('body',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Edit Post', ['class'=>'btn btn-primary pull-left']) !!}
        </div>

        {!! Form::close() !!}
        {{Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy', $post->id]])}}

        <div class="form-group">
            {!! Form::submit('Delete Post', ['class'=>'btn btn-danger  pull-right']) !!}
        </div>
        {!! Form::close() !!}
    </div>

    @include('includes/form_error')
@endsection