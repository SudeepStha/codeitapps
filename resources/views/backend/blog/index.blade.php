@extends('backend.app')

@section('title')
    Blog
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/blog/create" class="btn btn-primary btn-sm">New BLog</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                    <tr>
                                        <td>{{ $blog->id }}</td>
                                        <td>{{ $blog->title}}</td>
                                        <td>{!! Str::limit($blog->description, 80) !!}</td>
                                        <td>
                                            <form action="/blog/{{ $blog->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="/blog/{{$blog->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
                                            <a href="/blog/{{$blog->id}}" class="btn btn-primary btn-sm">View</a>
                                            </form>
                                           
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