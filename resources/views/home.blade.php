@extends('backend.app')

@section('title')
    Dashboard
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                {{-- small box in dashboard --}}
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $totalcourse}}</h3>
                        <p>Total Courses</p>
                    </div>
                    <div class="icon">
                        <i class="icon icon-bag"></i>
                    </div>
                        <a href="/courses" class="small-box-footer">View all <i class="fas fa-arrow-circle-right"></i> </a>
                </div>
            </div>
        </div>
    </div>
@endsection
