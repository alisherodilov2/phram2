@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2>{{__('backend.projects')}}</h2>
                <a href="{{ route('admin.projects.create') }}" class="btn btn-success">Create project</a>
                <div class="card mt-2">
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>
                                    id
                                </th>
                                <th>
                                    link
                                </th>
                                <th>
                                    title
                                </th>
                                <th>
                                    Actions
                                </th>
                            </tr>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td><a href="{{ $project->link }}">{{ $project->link }}</a></td>
                                        <td>{{ $project->title }}</td>
                                        <td>
                                            <img src="{{$project->getFirstMediaUrl()}}" alt="" style="width: 250px">
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <form action="{{ route('admin.projects.destroy', $project->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger">Delete</button>
                                                </form>
                                                <a href="{{ route('admin.projects.edit', $project->id) }}"
                                                    class="btn btn-primary">Edit</a>
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
