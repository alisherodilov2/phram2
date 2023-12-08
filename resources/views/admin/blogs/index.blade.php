@extends('admin.layouts.master')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h2>Blogs</h2>
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-success">Create Blogs</a>
            <div class="card mt-2">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>
                                id
                            </th>
                            <th>
                                image
                            </th>
                            <th>
                                title
                            </th>
                            <th>
                                title_ru
                            </th>
                            <th>
                                title_en
                            </th>
                            <th>
                                Actions
                            </th>
                        </tr>
                        <tbody>
                          @foreach ($blogs as $item)
                              <tr>
                                <td>
                                    {{$item->id}}
                                </td>
                                <td>
                                    <img src="{{$item->getFirstMediaUrl() ?? ''}}" alt="" style="width: 250px">
                                </td>
                                <td>
                                    {{$item->title}}
                                </td>
                                <td>
                                    {{$item->title_ru}}
                                </td>
                                <td>
                                    {{$item->title_en}}
                                </td>
                                <td>
                                   <div class="d-flex">
                                    <form action="{{ route('admin.blogs.destroy', $item->id) }}"
                                        method="POST">
                                        @csrf @method('DELETE')<button class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{route('admin.blogs.edit' , $item->id)}}" class="btn btn-primary">Edit</a>
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