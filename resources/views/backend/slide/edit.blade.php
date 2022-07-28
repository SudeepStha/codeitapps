@extends('backend.app')

@section('title')
    Edit Slide
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/slide" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        <form action="/slide/{{$slide->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" class="form-control" type="text" name="title" value="{{$slide->title}}">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>

                            <div class="my-2">
                                <img src="{{asset($slide->image)}}" width="120" alt="">
                            </div>

                            <button type="submit">Update Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection