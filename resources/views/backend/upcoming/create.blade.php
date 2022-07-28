@extends('backend.app')

@section('title')
    Add New Classes
@endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/upcoming" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    @if (session('message'))
                        <p class="alert alert-success">{{session('message')}}</p>
                    @endif
                    <form action="/upcoming" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="course_id">Select Course <span class="text-danger">*</span></label>
                            <select id="course_id" class="form-control" name="course_id">
                                @foreach ($courses as $course)
                                    <option value="{{$course->id}}">{{$course->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Starting Date <span class="text-danger">*</span></label>
                            <input id="date" class="form-control" type="date" name="date">
                        </div>
                        <div class="form-group">
                            <label for="time">Starting Time <span class="text-danger">*</span></label>
                            <input id="time" class="form-control" type="time" name="time">
                        </div>
                        <div class="form-group">
                            <label for="class_type">Class Type</label>
                            <select id="class_type" class="form-control" name="class_type">
                                <option value="Physical">Physical</option>
                                <option value="Online">Online</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Save Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection