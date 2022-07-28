@extends('backend.app')

@section('title')
    Blog of: {{$blog->title}}
@endsection

@section('content')
    <div class="container-fluid">
      <div class="card">
         
    <div class="card-body"> 
     <p>
         {{-- ckeditor bata lyako kura lai dhekhauna ko lagi !! halnu parxa
             natra dhekhaudaina --}}
         {!!$blog->description!!}
     </p>
    </div>
      </div>

    </div>
@endsection