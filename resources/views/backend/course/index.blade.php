@extends('backend.app')

@section('title')
    Courses
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/courses/create" class="btn btn-primary btn-sm">Add Courses</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course</th>
                                    <th>Duration</th>
                                    <th>Category</th>
                                    <th>Fee</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                    <tr>
                                        <td>{{ $course->id}}</td>
                                        <td>{{ $course->name}}</td>
                                        <td>{{ $course->duration}}</td>
                                        <td>{{ $course->category->name}}</td>
                                        <td>{{ $course->fee}}</td>
                                        <td>
                                            <a href="/courses/{{$course->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="/courses/{{$course->id}}" class="btn btn-primary btn-sm">View</a>
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