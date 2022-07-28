@extends('backend.app')

@section('title')
    Upcoming Classes
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/upcoming/create" class="btn btn-primary btn-sm">Add New Classes</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Name</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>  
                                @foreach ($upcoming as $upcoming)
                                    <tr>
                                        <td>{{ $upcoming->id}}</td>
                                        <td>{{ $upcoming->course->name}}</td>
                                        <td>{{ $upcoming->date}}</td>
                                        <td>{{ $upcoming->time}}</td>
                                        <td><span class="{{ $upcoming->status == 1 ? 'badge bg-primary' : 'badge bg-danger'}}">{{ $upcoming->status == 1 ? 'Acitve' : 'Inactive'}}</span></td>
                                        <td>
                                            <a href="/upcoming/{{$upcoming->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
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