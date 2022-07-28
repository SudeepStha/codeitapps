@extends('backend.app')

@section('title')
    New Registration
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Student List
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Course</th>
                                    <th>Starting Date</th>
                                    <th>Time</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $index => $student)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->mobile}}</td>
                                        <td>{{$student->address}}</td>
                                        <td>{{$student->upcoming->course->name}}</td>
                                        <td>{{$student->upcoming->date}}</td>
                                        <td>{{$student->upcoming->time}}</td>
                                        <td>{{$student->remarks == "" ? "N/A" : $student->remarks }}</td>
                                        <td>
                                            <a href="">Edit</a>
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