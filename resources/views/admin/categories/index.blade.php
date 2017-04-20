@extends('layouts.admin')
@section('content')
    <h1>Ctegories</h1>

    <div class="col-xs-4">
           {{Form::open(['method'=>'POST', 'action'=>'AdminCategoryController@store'])}}

               <div class="form-group">
                   {!! Form::label('name', 'Category Name') !!}
                   {!! Form::text('name', null, ['class'=>'form-control']) !!}
               </div>


               <div class="form-group">
                   {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
               </div>

               {!! Form::close() !!}

    </div>
    <div class="col-xs-8">
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Edit Category</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            @if($categories)
                @foreach($categories as $category)

                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->created_at->diffForHumans()}}</td>
                        <td>{{$category->updated_at->diffForHumans()}}</td>
                        <td>Edit: <a href="{{route('admin.category.edit', $category->id)}}">{{$category->name}}</a> </td>

                        <td>

                            {{Form::open(['method'=>'DELETE', 'action'=>['AdminCategoryController@destroy', $category->id]])}}

                            <div class="form-group">
                                {!! Form::submit('Delete Category', ['class'=>'btn btn-danger']) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>

    </div>



@stop