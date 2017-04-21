@extends('layouts.admin')

@section('content')
    <h1>replies</h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Author</th>
            <th>Body</th>
            <th>Email</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>

        @if($replies)
            @foreach($replies as $reply)
                <tr>
                    <td>{{$reply->id}}</td>
                    <td>
                        <a href="{{route('admin.reply.edit', $reply->id)}}">{{$reply->author}}
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                    <td>{{$reply->body}}</td>
                    <td>{{$reply->email}}</td>
                    <td>
                        @if($reply->is_active == 1)
                            {{Form::model($reply,['method'=>'PATCH', 'action'=>['CommentReplyController@update', $reply->id]])}}

                            <input type="hidden" name="is_active" value="0" >
                            <div class="form-group">
                                {!! Form::submit('Un-approve', ['class'=>'btn btn-primary']) !!}
                            </div>

                            {!! Form::close() !!}

                        @else
                            {{Form::model($reply,['method'=>'PATCH', 'action'=>['CommentReplyController@update', $reply->id]])}}

                            <input type="hidden" name="is_active" value="1" >
                            <div class="form-group">
                                {!! Form::submit('Approve', ['class'=>'btn btn-success']) !!}
                            </div>

                            {!! Form::close() !!}
                        @endif
                    </td>
                    <td>
                        {{Form::open(['method'=>'DELETE', 'action'=>['CommentReplyController@destroy', $reply->id]])}}

                        <div class="form-group">
                            {!! Form::submit('Delete reply', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                    <td>{{$reply->created_at->diffforhumans()}}</td>
                    <td>{{$reply->updated_at->diffforhumans()}}</td>
                </tr>
            @endforeach



        @endif
        </tbody>
    </table>



@stop