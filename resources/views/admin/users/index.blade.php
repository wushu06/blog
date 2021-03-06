@extends('layouts.admin')
@section('content')
    <h1>Users</h1>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Status</th>
            <th>Profile Photo</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>
        @if($users)
            @foreach($users as $user)

                <tr>
                    <td>{{$user->id}}</td>
                    <td><a href="{{route('admin.users.edit', $user->id)}}">{{$user->name}}

                            <span class="glyphicon glyphicon-edit"></span>
                        </a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->role->name}}</td>
                    <td>{{$user->is_active == 1?'Active':'Not Active'}}</td>
                    <td><img src="{{$user->photo ? '/images/'.$user->photo->name :'/images/dz.jpg' }}"  height="100px" ></td>
                    <td>{{$user->created_at->diffForHumans()}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
@stop