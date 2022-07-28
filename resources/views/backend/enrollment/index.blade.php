@extends('backend.app')

@section('title')
    Enrollment
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Enrollment Leads
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Course</th>
                                    <th>Start From</th>
                                    <th>Time</th>
                                    <th>Class Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{$student->id}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->mobile}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->upcoming->course->name}}</td>
                                        <td>{{$student->upcoming->date}}</td>
                                        <td>{{$student->upcoming->time}}</td>
                                        <td>{{$student->upcoming->class_type}}</td>
                                        <th>
                                            <a href="">View</a>
                                        </th>
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