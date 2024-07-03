@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>{{__('backend.welcome')}}</h1>    
                <div class="card">
                    <div class="card-body">
                        <a href="{{ route('admin.users.create') }}" class="btn btn-success">Create User</a>
                        <table class="table">
                            <thead>
                                <th>
                                    id
                                </th>
                                <th>
                                    name
                                </th>
                                <th>
                                    email
                                </th>
                                <th>
                                    Actions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>
                                            {{ $user->id }}
                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                                    @csrf @method('DELETE')<button class="btn btn-danger">Delete</button></form>
                                                    <a class="btn btn-info" href="{{route('admin.users.edit' , $user->id)}}">Edit</a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
