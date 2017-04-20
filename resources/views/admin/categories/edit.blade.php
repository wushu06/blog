@extends('layouts.admin')
@section('content')
    <h1>Ctegories</h1>


        {{Form::model($category,['method'=>'PATCH', 'action'=>['AdminCategoryController@update', $category->id]])}}

        <div class="form-group">
            {!! Form::label('name', 'Category Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}






@stop