@extends('backend.app')

@section('content')
    <div class="container-fliud">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Slides List</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($slides as $slide)
                                <tr>
                                    <td>{{$slide->id}}</td>
                                    <td>{{$slide->title}}</td>
                                    <td>
                                        <a href="/slide/{{$slide->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
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