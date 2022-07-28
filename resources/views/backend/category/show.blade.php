@extends('backend.app')

@section('content')
    <div class="container-fluid">
        <a href="/categories" class="btn btn-primary btn-sm md-2">Back</a>

        <div class="row">
                @foreach ($courses as $course)
                    <div class="col-md-3 mt-3">
                        <div class="card">
                            <img src="{{asset($course->image)}}" class="card-img-top" alt="{{$course->image}}">
                            <div class="card-body">
                              <h5 class="card-title"><strong>{{$course->name}}</strong></h5><br>
                              <address>
                                  <strong>Duration:</strong> {{$course->duration}} <br>
                                  <strong>Fee:</strong> {{$course->fee}}
                              </address>
                              <a href="/syllabus/{{$course->id}}" class="btn btn-primary">Syllabus</a>
                            </div>
                          </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection