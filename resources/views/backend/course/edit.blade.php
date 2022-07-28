@extends('backend.app')

@section('title')
    Edit Course
@endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/courses" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    @if (session('message'))
                        <p class="alert alert-success">{{session('message')}}</p>
                    @endif
                    <form action="/courses/{{$course->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Course Name <span class="text-danger">*</span></label>
                            <input id="name" class="form-control" type="text" name="name" placeholder="Course Name" value="{{ $course->name}}">
                        </div>
                        <div class="form-group">
                            <label for="duration">Course Duration <span class="text-danger">*</span> <span>Eg. 1 month</span></label>
                            <input id="duration" class="form-control" type="text" name="duration" placeholder="Couorse Duration" value="{{$course->duration}}">
                        </div>
                        <div class="form-group">
                            <label for="fee">Course Fee <span class="text-danger">*</span></label>
                            <input id="fee" class="form-control" type="number" name="fee" placeholder="Course Fee" value="{{$course->fee}}">
                        </div>
                        <div class="form-group">
                            <label for="category">Course Category <span class="text-danger">*</span></label>
                            <select id="category" class="form-control" name="category_id">
                                @foreach ($categories as $category)
                                <option value="{{ $category->id}}">{{ $category->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="image">Image <span class="text-danger">*</span></label>
                            <input id="image" class="form-control-file" type="file" name="image">
                        </div>

                        <div class="my-2">
                            <img src="{{$course->image}}" alt="" width="120">
                        </div>
                        <div class="form-group">
                            <label for="syllabus">Course Syllabus <span class="text-danger">*</span> </label>
                            <textarea id="editor" class="form-control" name="syllabus" rows="5">{{$course->syllabus}}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection