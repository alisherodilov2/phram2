@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h1>{{ __('backend.welcome') }}</h1>
                <div class="card">
                    <div class="card-body">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Launch demo modal
                        </button>

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{ route('admin.permission.store') }}" method="post">
                                            @csrf
                                            <label for="">Nomi</label>
                                            <input type="text" class="form-control" name="name">
                                            <label for="">Permissions</label>
                                            <select name="permission[]" class="form-control selectpicker" id=""
                                                multiple data-live-search="true">
                                                @foreach ($permissions as $permission)
                                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <thead>

                                <th>
                                    role
                                </th>
                                <th>
                                    permissions
                                </th>
                                <th>
                                    Actions
                                </th>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>
                                            {{ $role->name }}
                                        </td>
                                        <td>
                                            @foreach ($role->permissions as $permission)
                                                <span class="btn btn-primary">{{ $permission->name }}</span>
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <form action="{{ route('admin.permission.destroy', $role->id) }}"
                                                    method="POST">
                                                    @csrf @method('DELETE')<button class="btn btn-danger">Delete</button>
                                                </form>
                                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                                    data-target="#exampleModal{{ $role->id }}">
                                                    Edit
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade bd-example-modal-lg"
                                                    id="exampleModal{{ $role->id }}" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="{{ route('admin.permission.store') }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <label for="">Nomi</label>
                                                                    <input type="text" value="{{ $role->name }}"
                                                                        class="form-control" name="name">
                                                                    <label for="">Permissions</label>
                                                                    <select name="permission[]"
                                                                        class="form-control selectpicker" id=""
                                                                        multiple data-live-search="true">
                                                                        @foreach ($permissions as $permission)
                                                                            <option
                                                                                {{ in_array($permission->name, $role->permissions->pluck('name')->toArray()) ? 'selected' : '' }}
                                                                                value="{{ $permission->name }}">
                                                                                {{ $permission->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>

                                                        </div>
                                                    </div>

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
