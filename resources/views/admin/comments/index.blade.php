@extends('layouts.admin')

@section('content')
    <h1>comments</h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Author</th>
            <th>Body</th>
            <th>Email</th>
            <th>Posts</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>

        @if($comments)
            @foreach($comments as $comment)
                <tr>
                    <td>{{$comment->id}}</td>
                    <td>
                    <a href="{{route('admin.comment.edit', $comment->id)}}">{{$comment->author}}
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                    <td>{{$comment->body}}</td>
                    <td>{{$comment->email}}</td>
                    <td><a href="">View Post</a></td>
                    <td>
                    @if($comment->is_active == 1)
                        {{Form::model($comment,['method'=>'PATCH', 'action'=>['AdminCommentsController@update', $comment->id]])}}

                        <input type="hidden" name="is_active" value="0" >
                        <div class="form-group">
                            {!! Form::submit('Un-approve', ['class'=>'btn btn-primary']) !!}
                        </div>

                        {!! Form::close() !!}

                    @else
                        {{Form::model($comment,['method'=>'PATCH', 'action'=>['AdminCommentsController@update', $comment->id]])}}

                        <input type="hidden" name="is_active" value="1" >
                        <div class="form-group">
                            {!! Form::submit('Approve', ['class'=>'btn btn-success']) !!}
                        </div>

                        {!! Form::close() !!}
                    @endif
                    </td>
                    <td>
                        {{Form::open(['method'=>'DELETE', 'action'=>['AdminCommentsController@destroy', $comment->id]])}}

                        <div class="form-group">
                            {!! Form::submit('Delete Comment', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                    <td>{{$comment->created_at->diffforhumans()}}</td>
                    <td>{{$comment->updated_at->diffforhumans()}}</td>
                </tr>
            @endforeach



        @endif
        </tbody>
    </table>



@stop