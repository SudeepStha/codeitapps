@extends('backend.app')

@section('title')
    Enquiry
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <a href="/enquiry" class="btn btn-primary btn-sm">Back</a>
                <hr>
                <address>
                    <strong>Name: </strong>{{$person->name}}<br>
                    <strong>Address: </strong>{{$person->address}}<br>
                    <strong>Mobile: </strong>{{$person->mobile}}<br>
                    <strong>Courses: </strong>{{$person->course->name}}<br>
                    <strong>Message: </strong>{{$person->message}}<br>
                </address>

                <form action="/enquiry/{{$person->id}}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="remarks">Remarks</label>
                        <textarea id="remarks" class="form-control" name="remarks" rows="3">{{$person->remarks}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection