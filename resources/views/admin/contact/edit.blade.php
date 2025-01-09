@extends('admin.layouts.master')
@section('content')
    @extends('admin.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('admin.contact.update', $contact->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card p-3">
                        <h2>Uz</h2>
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ $contact->name }}"
                                    id="">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="">Phone</label>
                                <input type="text" name="number" class="form-control" value="{{ $contact->number }}"
                                    id="">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="">Status</label>
                               <select name="status" class="form-control" id="">
                                @foreach (App\Models\Contact::CONTACT_STATUS as $key=>$value )
                                    <option value="{{$key}}" {{$contact->status == $key  ?'selected'  : ''}}>{{$value}}</option>
                                @endforeach
                               </select>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Description</label>
                                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $contact->description }}</textarea>
                                @error('description')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                        <button type="submit" class="btn btn-success mt-2 mb-3">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@endsection
