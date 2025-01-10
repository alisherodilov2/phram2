@extends('admin.layouts.master')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex">
                            <div class="flex-group">
                                <h3>
                                    {{ $vacancy->title  ?? ""}} / {{ $vacancy->title_ru }} / {{ $vacancy->title_en }}
                                </h3>
                                <p>
                                    {!! $vacancy->description !!}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-response">
                                    <thead>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            email
                                        </th>
                                        <th>
                                            Number
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            CV
                                        </th>
                                    </thead>
                                    <tbody>
                                        @foreach ($vacancy->resumes as $resume)
                                        <tr>
                                            <td>
                                                {{ $resume->name }}
                                            </td>
                                            <td>
                                                {{ $resume->email }}
                                            </td>
                                            <td>
                                                {{ $resume->number }}
                                            </td>
                                            <td>
                                                {{ $resume->description }}
                                            </td>
                                            <td>
                                                @if ($resume->hasMedia('resumes'))
                                                    <!-- Retrieve the first media file from the 'resumes' collection -->
                                                    @php
                                                        $resumeFile = $resume->getFirstMedia('resumes');
                                                        $fileUrl = $resumeFile->getUrl();
                                                        $fileExtension = pathinfo($fileUrl, PATHINFO_EXTENSION);
                                                    @endphp
                                                    
                                                    <!-- Display different file options based on file type -->
                                                    @if ($fileExtension == 'pdf')
                                                        <a href="{{ $fileUrl }}" target="_blank">View Resume (PDF)</a>
                                                    @elseif (in_array($fileExtension, ['doc', 'docx']))
                                                        <a href="https://docs.google.com/viewer?url={{ $fileUrl }}" target="_blank">View Resume (DOC)</a>
                                                    @else
                                                        <a href="{{ $fileUrl }}" target="_blank">Download Resume</a>
                                                    @endif
                                                @else
                                                    No resume uploaded.
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                        <a href="{{ route('admin.vacancy.index') }}" class="btn btn-light ">Orqaga</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        
    </script>
@endsection
