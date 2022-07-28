@extends('backend.app')

@section('title')
    Certificate
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/certificate" class="btn btn-primary btn-sm">Back</a>
                    </div>
                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-success">{{session('message')}}</div>
                        @else
                            
                        @endif
                        <form action="/certificate" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="name">Student Name</label>
                                <input id="name" Student Names="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="course_id">Course</label>
                                <select id="course_id" class="form-control" name="course_id">
                                    @foreach ($courses as $course)
                                        <option value="{{$course->id}}">{{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="certificate_no">Certificate No#</label>
                                <input id="certificate_no" class="form-control" type="text" name="certificate_no">
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">Save Record</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection