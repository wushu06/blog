@extends('layouts.admin')

@section('content')
    <h1>Posts</h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>User</th>
            <th>Category</th>
            <th>Photo</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created at</th>
            <th>Updated at</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)
            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->user->name}}
                        <a href="{{route('admin.posts.edit', $post->id)}}">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>
                    </td>
                    <td>{{$post->category_id?$post->category->name:'phpno oop'}}</td>
                    <td><img src="{{$post->photo? '/images/'.$post->photo->name: '/images/dz.jpg'}}" height="100px"></td>
                    <td><a href="{{url('/posts', $post->id)}}">{{$post->title}}</a></td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffforhumans()}}</td>
                    <td>{{$post->updated_at->diffforhumans()}}</td>
                </tr>
            @endforeach



        @endif
        </tbody>
    </table>



@stop
