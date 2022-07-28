@extends('backend.app')

@section('title')
    Certificate
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/certificate/create" class="btn btn-primary btn-sm">Add Certificate</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student</th>
                                    <th>Course</th>
                                    <th>Certificate No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificates as $index => $certificate)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{$certificate->name}}</td>
                                        <td>{{$certificate->course->name}}</td>
                                        <td>{{$certificate->certificate_no}}</td>
                                        <td>
                                            <a href="" class="badge bg-primary">Edit</a>
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