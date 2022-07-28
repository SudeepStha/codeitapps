@extends('backend.app')

@section('title')
    Course Description
@endsection

@section('content')
    <div class="container-fluid">
      <div class="card">
          <div class="card-header">
            <a href="/courses" class="btn btn-primary btn-sm">Back</a>
          </div>
        
    <div class="card-body">
         {{-- Course Syllabus --}}
     <h5>Course Name: <strong>{{$course->name}}</strong> </h5>
     <h5>Duration: <strong>{{$course->duration}}</strong></h5>
     <h5>Category: <strong>{{$course->category->name}}</strong></h5>
     
     <hr>
 
     <h1>Syllabus</h1>
 
     <p>
         {{-- ckeditor bata lyako kura lai dhekhauna ko lagi !! halnu parxa
             natra dhekhaudaina --}}
         {!!$course->syllabus!!}
     </p>
    </div>
      </div>

    </div>
@endsection