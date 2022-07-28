@extends('backend.app')

@section('title')
    New Slide
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
                        <form action="/slide" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input id="title" class="form-control" type="text" name="title">
                            </div>
                            <div class="form-group">
                                <label for="image">Image</label>
                                <input id="image" class="form-control-file" type="file" name="image">
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection