@extends('backend.app')

@section('content')
    <div class="container-fluid px-5">
        <h1>Syllabus</h1>
        <h4>Course: {{$course->name}}</h4>
        <h4>Duration: {{$course->duration}}</h4>
        <h4>Fee: {{$course->fee}}</h4>

        <p>
            {!! $course->syllabus !!}
        </p>
    </div>
@endsection