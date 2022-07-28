@extends('backend.app')

@section('title')
    Edit Categories
@endsection

@section('content')
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="/categories" class="btn btn-primary btn-sm">Back</a>
                </div>
                <div class="card-body">
                    @if (session('message'))
                        <p class="alert alert-success">{{session('message')}}</p>
                    @endif
                    <form action="/categories/{{ $category->id }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Categroy Name</label>
                            <input id="name" class="form-control" type="text" name="name" placeholder="Category Name" value="{{$category->name}}">
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm">Update Record</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection