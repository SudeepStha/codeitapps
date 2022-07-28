@extends('backend.app')

@section('title')
    Enquiry
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong>Recent Enquiry</strong>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Student Name</th>
                                    <th>Mobile</th>
                                    <th>Address</th>
                                    <th>Message</th>
                                    <th>Course</th>
                                    <th>Remarks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enquiry as $enquiry)
                                    <tr>
                                        <td>{{ $enquiry->id}}</td>
                                        <td>{{ $enquiry->name}}</td>
                                        <td>{{ $enquiry->mobile}}</td>
                                        <td>{{ $enquiry->address}}</td>
                                        <td>{{ $enquiry->message}}</td>
                                        <td>{{ $enquiry->course->name}}</td>
                                        <td>{{ $enquiry->remarks}}</td>
                                        <td>
                                            <a href="/enquiry/{{$enquiry->id}}/edit" class="btn btn-primary btn-sm">Show</a>
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